<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Models\Company;

class CompanyController extends Controller
{
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'company_name' => 'required|string|max:255|unique:companies,company_name',
            'company_logo'   => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'company_email' => 'required|email',
            'company_phone' => 'required|string|max:255',
            'company_account_number' => 'required|string|max:255',
            'company_account_name' => 'required|string|max:255',
            'company_bank' => 'required|string|max:255',
            'tax' => 'nullable|numeric',
        ]);
        

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        

        $validated = $validator->validated();

        // Handle file upload
        if ($request->hasFile('company_logo')) {
            $filename = time() .'.'. $request->company_logo->extension();
            $request->company_logo->storeAs('logo', $filename, 'public');
            $validated['company_logo'] = $filename;
        }

        $company = Company::create($validated);

        return response()->json(['message' => 'Company saved successfully', 'company'=>$company]);
    }

    public function index()
    {
        $companies = Company::all();

        return response()->json([
            'companies' => $companies
        ]);
    }

    public function show($id)
    {
        $company = Company::find($id);

        if (!$company) {
            return response()->json(['message' => 'Company not found'], 404);
        }

        return response()->json(['company' => $company]);
    }

    public function update(Request $request, $id)
    {
        $company = Company::find($id);

        if (!$company) {
            return response()->json(['message' => 'Company not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'company_name' => 'sometimes|string|max:255|unique:companies,company_name,' . $company->id,
            'company_logo' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'company_email' => 'sometimes|email',
            'company_phone' => 'sometimes|string|max:255',
            'company_account_number' => 'sometimes|string|max:255',
            'company_account_name' => 'sometimes|string|max:255',
            'company_bank' => 'sometimes|string|max:255',
            'tax' => 'sometimes|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $validated = $validator->validated();

        // Logo update handling
        if ($request->hasFile('company_logo')) {
            $filename = time() . '.' . $request->company_logo->extension();
            $request->company_logo->storeAs('logo', $filename, 'public');
            $validated['company_logo'] = $filename;
        }

        $company->update($validated);

        return response()->json([
            'message' => 'Company updated successfully',
            'company' => $company
        ]);
    }

    public function destroy($id)
    {
        $company = Company::find($id);

        if (!$company) {
            return response()->json(['message' => 'Company not found'], 404);
        }

        $company->delete();

        return response()->json(['message' => 'Company deleted successfully']);
    }

}
