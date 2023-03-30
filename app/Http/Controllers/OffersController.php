<?php

namespace App\Http\Controllers;

use App\Models\Offers;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreoffersRequest;
use App\Http\Requests\UpdateoffersRequest;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (Gate::denies('access-admin')){
            abort('403');
         }
        $Offers = Offers::latest()->paginate(10);

        return view('offers.index',compact('Offers'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('offers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreoffersRequest $request)
    {
        $request->validate([

            'title' => 'required',

            'salary' => 'required',

            'type' => 'required',

            'location' => 'required',

            'description' => 'required',

            'available_for' => 'required',

        ]);

      

        Offers::create($request->all());

       

        return redirect()->route('offers.index')

                        ->with('success','Offers created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offers $Offers)
    {
            $data = Offers::all();
            return view('Offers',['Offers'=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offers $Offer)
    {
        return view('offers.edit',compact('Offer'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update( UpdateoffersRequest $request,Offers $Offer)
    {
        $request->validate([

            'title' => '',

            'salary' => '',

            'type' => '',

            'location' => '',

            'description' => '',

            'available_for' => '',

        ]);
        $Offer->update($request->all());


      

        return redirect()->route('offers.index')

                        ->with('success','offers updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offers $Offer)
    {
        $Offer->delete();

        return redirect()->route('offers.index')

                        ->with('success','Offers deleted successfully');
    }
}
