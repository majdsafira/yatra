<?php

namespace App\Http\Controllers;

use App\Models\Tours;
use Illuminate\Http\Request;
use Session;


class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        if (Session::has('loginId')) {
            $tours = Tours::all();
            return view('admin.tours.toursInfo')->with('tours', $tours);
        } else {
            return view('admin.adminpages.login');
        }





    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //
        // return view('admin.tour.addTour');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'departure' => 'required',
            'departure_time' => 'required',
            'maximum_travellers' => 'required',
            'popular_places' => 'required',
            'price' => 'required',

        ]);
        if ($request == true) {
            $tours = new tours;
            $tours->name = $request->input('name');
            $tours->description = $request->input('description');
            $tours->departure = $request->input('departure');
            $tours->departure_time = $request->input('departure_time');
            $tours->maximum_travellers = $request->input(['maximum_travellers']);
            $tours->popular_places = $request->input(['popular_places']);
            $tours->price = $request->input(['price']);
            $donate->save();
            return redirect('/tours')
                ->with(('status' . 'Your informasion submited successfully'));}



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function show(tours $tours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Session::has('loginId')) {
            $tours = Tours::find($id);
            return view('admin.tours.toursEdit')->with('tours', $tours);
        } else {
            return view('admin.adminpages.login');
        }
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Session::has('loginId')) {
            $tours = Tours::find($id);
            // dd($donate);
            $tours->name = $request->input('name');
            $tours->description = $request->input('description');
            $tours->departure = $request->input('departure');
            $tours->departure_time = $request->input('departure_time');
            $tours->maximum_travellers = $request->input(['maximum_travellers']);
            $tours->popular_places = $request->input(['popular_places']);
            $tours->price = $request->input(['price']);
            $tours->save();
            return redirect('/tours')->with('success', "Admin Edited");
        } else {
            return view('admin.adminpages.login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Session::has('loginId')) {
            $tours = Tours::find($id);
            $tours->delete();
            return redirect('/tours')->with('success', "tours Deleted");
        }
         else {
            return view('admin.adminpages.login');
        }
    }
}
