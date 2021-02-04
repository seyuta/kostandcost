<?php

namespace App\Http\Controllers;

use App\Rooms;
use App\RoomTypes;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index()
    {
        $data['rooms'] = Rooms::all();
        $data['today'] = Carbon::now()->toDateString();
        $data['options'] = RoomTypes::select('type_name', 'id')->get();
        // dd($data);

        return view('room.index', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $req_rooms = [
            'room_type_id' => $request->room_type_id,
            'no_room' => $request->no_room,
            'location' => $request->location,
            'size_room' => $request->size_room,
            'cost_per_day' => $request->cost_per_day,
            'cost_per_month' => $request->cost_per_month,
            'cost_per_year' => $request->cost_per_year,
            'ket_room' => $request->ket_room,
        ];
        Rooms::create($req_rooms);

        return redirect('/room');
    }

    public function show($id)
    {
        $data['room'] = Rooms::FindOrFail($id);
        return view('room.detail', $data);
    }

    public function edit($id)
    {
        $data['options'] = RoomTypes::select('type_name', 'id')->get();
        $data['room'] = Rooms::FindOrFail($id);
        return view('room.edit', $data);
    }

    public function update($id, Request $request)
    {
        $data = $request->except('_method', '_token');
        Rooms::FindOrFail($id)->update($data);

        return redirect('/room');
    }

    public function delete($id)
    {
        Rooms::FindOrFail($id)->delete();
        return redirect()->back();
    }
}
