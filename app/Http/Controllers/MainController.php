<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Offers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        
        $Offers = Offers::query();
        // $Offers = DB::table('offers');
        if ($request->has('type')) {
            $Offers = $Offers->where('type', $request->type);
        }
        if ($request->has('location')) {
            $Offers = $Offers->where('location', $request->location);
        }
        $Offers = $Offers->get();
        

        return view('main.index',compact('Offers'));
/*         $Offers = Offers::all();

        return view('main.index',compact('Offers')); */
/*         $Offers = Offers::latest()->paginate(10);

        return view('main.index',compact('Offers'))

            ->with('i', (request()->input('page', 1) - 1) * 5); */
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Offer = Offers::findOrFail($id);
        return view('main.show',compact('Offer'));
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
    public function update(Request $request, Offers $offers)
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
