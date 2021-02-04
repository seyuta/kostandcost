<?php

namespace App\Http\Controllers;

use App\AdditionalFacilities;
use Illuminate\Http\Request;

class AdditionalFacilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['facilities'] = AdditionalFacilities::all();
        return view('room.roomFacilities', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req_facilities = [
            'facilities_name' => $request->facilities_name,
            'cost' => $request->cost,
            'ket' => $request->ket
        ];
        AdditionalFacilities::create($req_facilities);

        return redirect('additional-facilities');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except('_method', '_token');
        AdditionalFacilities::FindOrFail($id)->update($data);

        return redirect('/additional-facilities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        AdditionalFacilities::FindOrFail($id)->delete();
        return redirect()->back();
    }
}
