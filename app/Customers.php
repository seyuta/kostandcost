<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = [
        'emergency_contact_id',
        'occupant_id',
        'fullname',
        'nickname',
        'jenis_identitas',
        'no_identitas',
        'tempat_lahir',
        'tanggal_lahir',
        'no_hp1',
        'no_hp2',
        'gender',
        'profile_photo',
        'email',
        'job',
        'alamat_asal',
        'nama_instansi',
        'alamat_instansi',
        'no_telp_instansi'
    ];

    public function emergency_contacts()
    {
        return $this->hasOne('App\EmergencyContacts', 'id', 'emergency_contact_id');
    }

    public function occupants()
    {
        return $this->hasMany('App\Occupants', 'id', 'occupant_id');
    }
}
