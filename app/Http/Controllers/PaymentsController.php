<?php

namespace App\Http\Controllers;

use App\Occupants;
use App\Payments;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['occupants'] = Occupants::all();
        $data['bookings'] = Occupants::whereHas('payments', function (Builder $query) {
            $query->where('dp_booking', '!=', null);
        })->get();

        return view('payments.index', $data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['occupants'] = Occupants::FindOrFail($id);

        if ($data['occupants']->periode == "Harian") {
            $data['cost'] = $data['occupants']->rooms->cost_per_day;
        }
        elseif ($data['occupants']->periode == "Bulanan") {
            $data['cost'] = $data['occupants']->rooms->cost_per_month;
        }
        elseif ($data['occupants']->periode == "Tahunan") {
            $data['cost'] = $data['occupants']->rooms->cost_per_year;
        }
        
        return view('payments.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $today = Carbon::now()->toDateString();
        $permitted_chars = '1234567890';
        $pay_code = substr(str_shuffle($permitted_chars), 0, 10);

        $req_payment = [
            'pay_code' => $pay_code,
            'bank_name' => $request->bank_name,
            'pay_method' => $request->pay_method,
            'transaction_code' => $request->transaction_code,
            'pay_date' => $today,
            'status' => "Lunas"
        ];
        Payments::FindOrFail($id)->update($req_payment);

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_dp(Request $request, $id)
    {
        $today = Carbon::now()->toDateString();
        $permitted_chars = '1234567890';
        $pay_code_dp = substr(str_shuffle($permitted_chars), 0, 10);

        $req_payment_dp = [
            'pay_code_dp' => $pay_code_dp,
            'bank_name_dp' => $request->bank_name_dp,
            'pay_method_dp' => $request->pay_method_dp,
            'transaction_code_dp' => $request->transaction_code_dp,
            'pay_date_dp' => $today,
            'status_dp' => "Lunas"
        ];
        Payments::FindOrFail($id)->update($req_payment_dp);

        return redirect()->back();
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function receipt($id)
    {
        $data['occupants'] = Occupants::FindOrFail($id);

        if ($data['occupants']->periode == "Harian") {
            $data['cost'] = $data['occupants']->rooms->cost_per_day;
        }
        elseif ($data['occupants']->periode == "Bulanan") {
            $data['cost'] = $data['occupants']->rooms->cost_per_month;
        }
        elseif ($data['occupants']->periode == "Tahunan") {
            $data['cost'] = $data['occupants']->rooms->cost_per_year;
        }
        
        return view('payments.receipt', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function receipt_dp($id)
    {
        $data['occupants'] = Occupants::FindOrFail($id);

        if ($data['occupants']->periode == "Harian") {
            $data['cost'] = $data['occupants']->rooms->cost_per_day;
        }
        elseif ($data['occupants']->periode == "Bulanan") {
            $data['cost'] = $data['occupants']->rooms->cost_per_month;
        }
        elseif ($data['occupants']->periode == "Tahunan") {
            $data['cost'] = $data['occupants']->rooms->cost_per_year;
        }

        return view('payments.receipt_dp', $data);
    }
}
