<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'company_name',
        'company_logo',
        'company_phone',
        'company_email',
        'company_address',
        'company_color',
        'company_account_number',
        'company_account_name',
        'company_bank',
        'tax',
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
