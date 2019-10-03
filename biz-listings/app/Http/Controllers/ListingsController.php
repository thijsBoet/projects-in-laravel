<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = \App\Listing::all();

        return view('listings.index', ['listings' => $listings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Listing::create(
            request()->validate([
                'title' => 'required',
                'description' => 'required'
            ])
        );

        return redirect('listings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Listing $listing
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
        return view('listings.show', ['listing' => $listing]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Listing $listing
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        return view('listings.show', ['listing' => $listing]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Listing $listing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $listing)
    {
        $listing->update(request(['title', 'description']));

        return redirect('listing');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Listing $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();

        return redirect('listing');
    }
}
