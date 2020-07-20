<?php

namespace App\Http\Controllers;

use App\Periods;
use Illuminate\Http\Request;

class PeriodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periods = Periods::all();
        return view('periods.index', compact('periods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lastPeriod = Periods::get()->last();
        return view('periods.create', compact('lastPeriod'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $period = new Periods();
        $period->month = $request->post('month');
        $period->month_number = $request->post('month_number');
        $period->save();
        return redirect('/periods');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Periods  $periods
     * @return \Illuminate\Http\Response
     */
    public function show(Periods $periods)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Periods  $periods
     * @return \Illuminate\Http\Response
     */
    public function edit(Periods $periods)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Periods  $periods
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periods $periods)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Periods  $periods
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periods $periods)
    {
        //
    }
}
