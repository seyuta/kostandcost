<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $fillable = [
        'room_type_id',
        'occupant_id',
        'no_room',
        'location',
        'size_room',
        'cost_per_day',
        'cost_per_month',
        'cost_per_year',
        'ket_room'
    ];

    public function room_types()
    {
        return $this->hasOne('App\RoomTypes', 'id', 'room_type_id');
    }

    public function occupants()
    {
        return $this->hasOne('App\Occupants', 'id', 'occupant_id');
    }
}
