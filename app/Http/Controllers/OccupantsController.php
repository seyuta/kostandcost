<?php

namespace App\Http\Controllers;

use App\Rooms;
use App\Occupants;
use App\Customers;
use App\AdditionalFacilities;
use App\Payments;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OccupantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['occupants'] = Occupants::all();
        $data['options_room'] = Rooms::select('no_room', 'id')->get();
        $data['options_customer'] = Customers::select('fullname', 'id')->get();
        $data['today'] = Carbon::now()->toDateString();

        return view('occupants.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->periode == 'Harian') {
            $today = Carbon::now()->toDateString();
            $length = Carbon::parse($request->end_date)->diffInDays($today);
            $input_length = "$length Hari";
            $cost = Rooms::where('id', $request->room_id)->first()->value('cost_per_day');
            $price = $length * $cost;
        }
        elseif ($request->periode == 'Bulanan') {
            $today = Carbon::now()->toDateString();
            $length = Carbon::parse($request->end_date)->diffInMonths($today);
            $input_length = "$length Bulan";
            $cost = Rooms::where('id', $request->room_id)->first()->value('cost_per_month');
            $price = $length * $cost;
        }
        elseif ($request->periode == 'Tahunan') {
            $today = Carbon::now()->toDateString();
            $length = Carbon::parse($request->end_date)->diffInYears($today);
            $input_length = "$length Tahun";
            $cost = Rooms::where('id', $request->room_id)->first()->value('cost_per_year');
            $price = $length * $cost;
        }

        $permitted_chars = '123456789ABCDEFGHJKLMNPQRSTUVWXYZ';
        $no_kwitansi = Carbon::now()->format('dmy') . substr(str_shuffle($permitted_chars), 0, 7);
        $no_kwitansi_dp = Carbon::now()->format('dmy') . substr(str_shuffle($permitted_chars), 0, 7);
        
        $req_payments = [
            'no_kwitansi' => $no_kwitansi,
            'no_kwitansi_dp' => $no_kwitansi_dp,
            'dp_booking' => $request->dp_booking,
            'bill' => $price
        ];
        $payment = Payments::create($req_payments);
        $payment_id = $payment->id;

        $req_occupants = [
            'room_id' => $request->room_id,
            'customer_id' => $request->customer_id,
            'additional_facilities_id' => $request->additional_facilities_id,
            'payment_id' => $payment_id,
            'periode' => $request->periode,
            'length' => $input_length,
            'due_date' => $request->due_date,
            'end_date' => $request->end_date
        ];
        $occupant = Occupants::create($req_occupants);
        $occupant_id = $occupant->id;

        Rooms::where('id', $request->room_id)->update(['occupant_id' => $occupant_id]);
        Customers::where('id', $request->customer_id)->update(['occupant_id' => $occupant_id]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['occupant'] = Occupants::FindOrFail($id);
        return view('occupants.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['occupant'] = Occupants::FindOrFail($id);
        $data['options_room'] = Rooms::select('no_room', 'id')->get();
        $data['options_customer'] = Customers::select('fullname', 'id')->get();

        return view('occupants.edit', $data);
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
        if ($request->end_date <= Carbon::now()->toDateString()) {
            Rooms::where('occupant_id', $id)->update(['occupant_id' => null]);
        }
        else {
            Rooms::where('id', $request->room_id)->update(['occupant_id' => $id]);
        }

        if ($request->periode == 'Harian') {
            $today = Carbon::now()->toDateString();
            $length = Carbon::parse($request->end_date)->diffInDays($today);
            $input_length = "$length Hari";
            $cost = Rooms::where('id', $request->room_id)->first()->value('cost_per_day');
            $price = $length * $cost;
        } elseif ($request->periode == 'Bulanan') {
            $today = Carbon::now()->toDateString();
            $length = Carbon::parse($request->end_date)->diffInMonths($today);
            $input_length = "$length Bulan";
            $cost = Rooms::where('id', $request->room_id)->first()->value('cost_per_month');
            $price = $length * $cost;
        } elseif ($request->periode == 'Tahunan') {
            $today = Carbon::now()->toDateString();
            $length = Carbon::parse($request->end_date)->diffInYears($today);
            $input_length = "$length Tahun";
            $cost = Rooms::where('id', $request->room_id)->first()->value('cost_per_year');
            $price = $length * $cost;
        }

        Payments::where('id', $request->payment_id)->update(['bill' => $price]);
        
        $data['all'] = $request->except('_method', '_token');
        $data['length'] = $input_length;
        Occupants::FindOrFail($id)->update($data);
        Customers::where('id', $request->customer_id)->update(['occupant_id' => $id]);

        return redirect('/occupants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
