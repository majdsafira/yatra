<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\tours;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cases = Book::join('tours', 'tours.id', '=', 'books.tour_id')->join('users', 'users.id', '=', 'books.user_id')
        ->select('tours.*', 'users.name as username', 'users.email as email' )
        ->get();
        return view('admin.cases.casesinfo', compact('cases'));

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
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function bookNow(Request $requests)
    {
        $data  = $requests->validate([
            'user_id' => 'required',
            'tour_id' => 'required',
        ]);
        Book::create($data);
        return redirect('tourdetails/' . request('tour_id'))->with('success', 'Tour booked successfully');
    }

    public function toggle($id)
    {
        $cases = new Book;
        $cases->where('id', $id)->update(['status' => request('status') == 'Done' ? 1:0]);

        return redirect()->route('cases')
            ->with('message', 'User has been approved successfully');

    }
}

