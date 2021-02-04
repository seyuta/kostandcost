<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $fillable = [
        'pay_code',
        'pay_code_dp',
        'no_kwitansi',
        'no_kwitansi_dp',
        'bill',
        'dp_booking',
        'bank_name',
        'bank_name_dp',
        'pay_method',
        'pay_method_dp',
        'transaction_code',
        'transaction_code_dp',
        'pay_date',
        'pay_date_dp',
        'status',
        'status_dp'
    ];

    public function occupants()
    {
        return $this->belongsTo('App\Occupants', 'id', 'payment_id');
    }
}
