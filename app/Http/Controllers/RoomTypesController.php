<?php

namespace App\Http\Controllers;

use App\RoomTypes;
use Illuminate\Http\Request;

class RoomTypesController extends Controller
{
    public function index()
    {
        $data['roomtypes'] = RoomTypes::all();
        return view('room.roomType', $data);
    }

    public function store(Request $request)
    {
        $req_roomtype = [
            'type_name' => $request->type_name,
            'size_bed' => $request->size_bed,
            'desk' => $request->desk,
            'wardrobe' => $request->wardrobe,
            'air_conditioner' => $request->air_conditioner,
            'line_telp' => $request->line_telp,
            'wifi' => $request->wifi,
            'bathroom' => $request->bathroom,
            'water_heater' => $request->water_heater,
            'private_balkon' => $request->private_balkon,
        ];
        RoomTypes::create($req_roomtype);

        return redirect('/room-type');
    }

    public function update($id, Request $request)
    {
        $data = $request->except('_method', '_token');
        RoomTypes::FindOrFail($id)->update($data);

        return redirect('/room-type');
    }

    public function delete($id)
    {
        RoomTypes::FindOrFail($id)->delete();
        return redirect()->back();
    }
}
