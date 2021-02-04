<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomTypes extends Model
{
    protected $fillable = [
        'type_name',
        'size_bed',
        'desk',
        'wardrobe',
        'air_conditioner',
        'line_telp',
        'wifi',
        'bathroom',
        'water_heater',
        'private_balkon'
    ];

    public function room()
    {
        return $this->belongsTo('App\Rooms', 'id');
    }
}
