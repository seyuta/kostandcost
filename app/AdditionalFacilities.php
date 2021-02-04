<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdditionalFacilities extends Model
{
    protected $fillable = [
        'facilities_name',
        'cost',
        'ket'
    ];
}
