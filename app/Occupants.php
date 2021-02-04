<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupants extends Model
{
    protected $fillable = [
        'room_id',
        'customer_id',
        'additional_facilities_id',
        'payment_id',
        'periode',
        'length',
        'due_date',
        'end_date'
    ];

    public function rooms()
    {
        return $this->hasOne('App\Rooms', 'id', 'room_id');
    }

    public function customers()
    {
        return $this->belongsTo('App\Customers', 'customer_id', 'id');
    }

    public function payments()
    {
        return $this->hasOne('App\Payments', 'id', 'payment_id');
    }
}
