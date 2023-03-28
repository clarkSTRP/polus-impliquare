<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreoffersRequest;
use App\Http\Requests\UpdateoffersRequest;
use App\Models\Offers;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreoffersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Offers $offers)
    {
            $data = Offers::all();
            return view('Offers',['Offers'=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offers $offers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateoffersRequest $request, Offers $offers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offers $offers)
    {
        //
    }
}
