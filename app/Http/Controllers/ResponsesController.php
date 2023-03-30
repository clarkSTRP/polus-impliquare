<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreresponsesRequest;
use App\Http\Requests\UpdateresponsesRequest;
use App\Models\Offers;
use App\Models\Responses;
use Illuminate\Support\Facades\Auth;

class ResponsesController extends Controller
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
    public function create($Offer)

    {
        $Offers  = Offers::findOrFail($Offer);
        return view('responses.create')->with('Offer', $Offers);
/*         return view('responses.create'); */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreresponsesRequest $request ,$Offer)
    {
        $request->validate([
            'content' => 'required',

        ]);
        $id = Auth::id();
        $Offers  = Offers::findOrFail($Offer);

        $myArray = $request->all();
        $myArray["user_id"] = $id;
        $myArray['offers_id'] = $Offers->id;
        Responses::create($myArray);

       

        return redirect()->route('main.index')

                        ->with('success','Offers created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Responses $responses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Responses $responses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateresponsesRequest $request, Responses $responses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Responses $responses)
    {
        //
    }
}
