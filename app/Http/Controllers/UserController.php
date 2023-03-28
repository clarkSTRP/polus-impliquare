<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $User = User::latest()->paginate(10);

        return view('user.index',compact('User'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $request->validate([

            'name' => '',

            'email' => '',
            
            'password' => '',

        ]);

      

        User::create($request->all());

       

        return redirect()->route('user.index')

                        ->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $User)
    {
            $data = User::all();
            return view('user',['User'=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $User)
    {
        return view('user.edit',compact('User'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update( UpdateUserRequest $request,User $User)
    {
        $request->validate([

            'name' => '',

        ]);
        $User->update($request->all());


      

        return redirect()->route('user.index')

                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $User)
    {
        $User->delete();

        return redirect()->route('user.index')

                        ->with('success','User deleted successfully');
    }
}
