<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'client_name',
        'type',
        'issue_date',
        'due_date',
        'company_id'
    ];

    public function company(){
        return $this->belongsTo(Company::class, 'company_id')
        ->select(
                'id',
                        'company_name', 
                        'company_logo', 
                        'company_phone', 
                        'company_phone', 
                        'company_email',
                        'company_account_name',
                        'company_account_number',
                        'company_bank',
                        'tax'
                );
    }

    public function items(){
        return $this->hasMany(InvoiceItem::class)
        ->select(
            'invoice_id',
            'description',
            'note',
            'quantity',
            'rate'
        );
    }
}
