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


        if (session()->has('loginId')) {
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

        return view('admin.tours.create');
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
            'languages' => 'required',
            'popular_places' => 'required',
            'price' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'image3' => 'required',
            'image4' => 'required',

        ]);

        if ($request == true) {
            $tours = new tours;
            $tours->name = $request->input('name');
            $tours->description = $request->input('description');
            $tours->departure = $request->input('departure');
            $tours->departure_time = $request->input('departure_time');
            $tours->maximum_travellers = $request->input(['maximum_travellers']);
            $tours->languages = $request->input(['languages']);
            $tours->popular_places = $request->input(['popular_places']);
            $tours->price = $request->input(['price']);
            $image_path1 = request('image1')->store('tourimg','public');
            $tours->image1 = $image_path1;
            $image_path2 = request('image2')->store('tourimg','public');
            $tours->image2 = $image_path2;
            $image_path3 = request('image3')->store('tourimg','public');
            $tours->image3 = $image_path3;
            $image_path4 = request('image4')->store('tourimg','public');
            $tours->image4 = $image_path4;

            $tours->save();

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
        $tour = Tours::find($tours->id);
        // dd($tour);
        return view('tourdetails', compact('tour'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (session()->has('loginId')) {
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
        if (session()->has('loginId')) {
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
        if (session()->has('loginId')) {
            $tours = Tours::find($id);
            $tours->delete();
            return redirect('/tours')->with('success', "tours Deleted");
        }
         else {
            return view('admin.adminpages.login');
        }
    }

    public function viewtour() {

        $tours = Tours::all();
        return view('tourgrid')->with('tours', $tours);

    }
}
