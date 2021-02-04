<?php

namespace App\Http\Controllers;

use File;
use Storage;
use App\Customers;
use App\EmergencyContacts;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $data['customers'] = Customers::all();
        return view('customer.index', $data);
    }

    public function create()
    {
        return view('customer.add');
    }
    
    public function store(Request $request)
    {
        $image = $request->file('profile_photo');
        $photo_name = $image->getClientOriginalName();
        Storage::put('public/profile_photo/'. $photo_name, File::get($image));

        $req_emergency_contacts = [
            'fullname_ec' => $request->fullname_ec,
            'relation' => $request->relation,
            'jenis_identitas_ec' => $request->jenis_identitas_ec,
            'no_identitas' => $request->no_identitas,
            'tmp_lahir_ec' => $request->tmp_lahir_ec,
            'tgl_lahir_ec' => $request->tgl_lahir_ec,
            'no_hp1_ec' => $request->no_hp1_ec,
            'no_hp2_ec' => $request->no_hp2_ec,
            'gender_ec' => $request->gender_ec,
            'email_ec' => $request->email_ec,
            'job_ec' => $request->job_ec,
            'alamat_ec' => $request->alamat_ec,
        ];
        $emergency_contacts = EmergencyContacts::create($req_emergency_contacts);
        $emergency_contact_id = $emergency_contacts->id;

        $req_customer = [
            'emergency_contact_id' => $emergency_contact_id,
            'fullname' => $request->fullname,
            'nickname' => $request->nickname,
            'jenis_identitas' => $request->jenis_identitas,
            'no_identitas' => $request->no_identitas,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_hp1' => $request->no_hp1,
            'no_hp2' => $request->no_hp2,
            'gender' => $request->gender,
            'profile_photo' => $photo_name,
            'email' => $request->email,
            'job' => $request->job,
            'alamat_asal' => $request->alamat_asal,
            'nama_instansi' => $request->nama_instansi,
            'alamat_instansi' => $request->alamat_instansi,
            'no_telp_instansi' => $request->no_telp_instansi
        ];
        Customers::create($req_customer);

        return redirect('/customer');
    }

    public function show($id)
    {
        $data['customer'] = Customers::FindOrFail($id);
        return view('customer.detail', $data);
    }

    public function edit($id)
    {
        $data['customer'] = Customers::FindOrFail($id);
        return view('customer.edit', $data);
    }

    public function update($id, Request $request)
    {
        if ($request->profile_photo != null) {
            $get_pp = Customers::where('id', $id)->first();
            Storage::delete('/public/profile_photo/'. $get_pp['profile_photo']);

            $image = $request->file('profile_photo');
            $photo_name = $image->getClientOriginalName();
            Storage::put('public/profile_photo/' . $photo_name, File::get($image));
            Customers::FindOrFail($id)->update(['profile_photo' => $photo_name]);
        }

        $data = $request->except('profile_photo', '_method', '_token');
        EmergencyContacts::FindOrFail($id)->update($data);
        Customers::FindOrFail($id)->update($data);

        return redirect('/customer');
    }

    public function delete($id)
    {
        Customers::FindOrFail($id)->delete();
        EmergencyContacts::FindOrFail($id)->delete();
        return redirect()->back();
    }
}