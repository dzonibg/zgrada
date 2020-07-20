<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\Payment;
use App\Period;
use App\Periods;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('payments.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $periodNumber = 0;
        $allPayments = Payment::where('apartment_number', '=', $request->post('number'))
            ->select('paid')->sum('paid');
        $periodNumber = $allPayments/2600+1;
        $periodName = Period::where("month_number", '=', $periodNumber)->first();
        if (isset($periodName->month)) {
            $periodName = $periodName->month;
        } else $periodName = 'Nepoznat/Unapred';

        $payment = new Payment();
        $payment->apartment_number = $request->post('number');
        $payment->paid = $request->post('paid');

        if(($payment->paid) > 2600) {
            $mtsPaid = $payment->paid/2600 -1;
            $periodName = $periodName . ' + ' . $mtsPaid;
        }

        $payment->payment_date = $request->post('date');
        $payment->payment_method = $request->post('method');
        $payment->payment_month = $periodNumber;
        $payment->payment_month_name = $periodName;
        $payment->save();
        return redirect('/payments/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }

    public function validated() {
        return request()->validate([
            'number' => 'required'
        ]);
    }
}
