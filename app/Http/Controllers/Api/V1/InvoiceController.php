<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Models\{Invoice,InvoiceItem};


class InvoiceController extends Controller
{
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'client_name' => 'required|string',
            'type' => 'required|string|in:custom,due on receipt',
            'issue_date' => 'required|date',
            'due_date' => 'nullable|date',
            'company_id' => 'required|numeric|gte:1|exists:companies,id',
            //validation for invoice items
            'description'   => 'required|array|min:1',
            'description.*' => 'required|string',
            'note'   => 'nullable|array',
            'note.*'        => 'nullable|string',
            'quantity'   => 'required|array',
            'quantity.*'    => 'required|integer|min:1',
            'rate'   => 'required|array',
            'rate.*'        => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        

        $validated = $validator->validated();

        DB::beginTransaction();

        try{
            $invoice = Invoice::create([
                'client_name' => $validated['client_name'],
                'type' => $validated['type'],
                'issue_date' => $validated['issue_date'],
                'due_date' => $validated['due_date'],
                'company_id' => $validated['company_id'],
            ]);

            // LOOP THROUGH INVOICE ITEMS
            $descriptions = $validated['description'];
            $notes        = $validated['note'] ?? [];  // note can be null
            $quantities   = $validated['quantity'];
            $rates        = $validated['rate'];

            for ($i = 0; $i < count($descriptions); $i++) {
                InvoiceItem::create([
                    'invoice_id' => $invoice->id,
                    'description' => $descriptions[$i],
                    'note'        => $notes[$i] ?? null,
                    'quantity'    => $quantities[$i],
                    'rate'        => $rates[$i],
                ]);
            }

            DB::commit();

            return response()->json([
                'message' => 'Invoice created successfully',
                'invoice' => $invoice,
            ]);

        }catch (\Exception $e) {
            DB::rollBack();

            return response()->json(['error' => $e->getMessage()], 500);
        }

    }

    public function index()
    {
        $invoices = Invoice::with(['company', 'items'])->get();

        return response()->json([
            'message' => 'All invoices fetched successfully',
            'invoices' => $invoices
        ]);
    }

    public function show($id)
    {
        $invoice = Invoice::with(['company','items'])->find($id);

        if (!$invoice) {
            return response()->json(['error' => 'Invoice not found'], 404);
        }

        return response()->json([
            'message' => 'Invoice fetched successfully',
            'invoice' => $invoice
        ]);
    }

    public function update(Request $request, $id)
    {
        $invoice = Invoice::find($id);
        if (!$invoice) {
            return response()->json(['error' => 'Invoice not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'client_name' => 'required|string',
            'type' => 'required|string|in:custom,due on receipt',
            'issue_date' => 'required|date',
            'due_date' => 'nullable|date',
            'company_id' => 'required|numeric|gte:1|exists:companies,id',

            // items
            'description'   => 'required|array|min:1',
            'description.*' => 'required|string',
            'note'          => 'nullable|array',
            'note.*'        => 'nullable|string',
            'quantity'      => 'required|array',
            'quantity.*'    => 'required|integer|min:1',
            'rate'          => 'required|array',
            'rate.*'        => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $validated = $validator->validated();

        DB::beginTransaction();

        try {
            // Update invoice
            $invoice->update([
                'client_name' => $validated['client_name'],
                'type'        => $validated['type'],
                'issue_date'  => $validated['issue_date'],
                'due_date'    => $validated['due_date'],
                'company_id'  => $validated['company_id'],
            ]);

            // Remove existing items
            InvoiceItem::where('invoice_id', $invoice->id)->delete();

            // Create new items
            foreach ($validated['description'] as $i => $desc) {
                InvoiceItem::create([
                    'invoice_id' => $invoice->id,
                    'description' => $desc,
                    'note' => $validated['note'][$i] ?? null,
                    'quantity' => $validated['quantity'][$i],
                    'rate' => $validated['rate'][$i],
                ]);
            }

            DB::commit();

            return response()->json([
                'message' => 'Invoice updated successfully',
                'invoice' => $invoice->load('items')
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        $invoice = Invoice::find($id);

        if (!$invoice) {
            return response()->json(['error' => 'Invoice not found'], 404);
        }

        $invoice->delete();

        return response()->json([
            'message' => 'Invoice deleted successfully'
        ]);
    }

    
}
