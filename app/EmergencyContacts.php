<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmergencyContacts extends Model
{
    protected $fillable = [
        'fullname_ec',
        'relation',
        'jenis_identitas_ec',
        'no_identitas_ec',
        'tmp_lahir_ec',
        'tgl_lahir_ec',
        'no_hp1_ec',
        'no_hp2_ec',
        'gender_ec',
        'email_ec',
        'job_ec',
        'alamat_ec'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customers', 'id');
    }
}
