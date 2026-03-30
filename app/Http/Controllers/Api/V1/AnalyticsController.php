<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class AnalyticsController extends Controller
{
    public function index()
    {
        $companies = Company::select(['company_name', 'company_logo'])->withCount('invoices')->get();

        return response()->json([
            'companies' => $companies
        ]);
    }
}
