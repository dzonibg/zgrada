<?php

namespace App\Http\Controllers;

use App\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments = Apartment::all()->sortBy("number");
        return view("apartments.index", compact("apartments"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("apartments.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $apartment = new Apartment();
        $apartment->name = $request->post("name");
        $apartment->number = $request->post("apartmentNumber");
        $apartment->save();
        $message = "Dodat novi stan broj " . $apartment->number . " vlasnika " . $apartment->name;

        $apartments = Apartment::all()->sortBy("number");

        return view("apartments.index", compact("message", "apartments"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        $apartment = Apartment::findOrFail($apartment->id);
        $payments = $apartment->payment;
        return view("apartments.show", compact("apartment", "payments"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment)
    {
        Apartment::findOrFail($apartment->id);
        return view("apartments.edit", compact("apartment"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apartment $apartment)
    {

        $apartment->update($this->validated());
        return redirect("/apartments");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $apartment)
    {
        //
    }

    public function validated() {
        return request()->validate([
            'name' => 'required',
            'number' => 'required'
        ]);
    }

}
