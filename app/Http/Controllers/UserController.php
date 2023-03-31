<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Gate::denies('access-admin')){
            abort('403');
         }
        $User = User::latest()->paginate(10);

        return view('user.index',compact('User'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Gate::denies('access-admin')){
            abort('403');
         }
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        if (Gate::denies('access-admin')){
            abort('403');
         }
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
        if (Gate::denies('access-admin')){
            abort('403');
         }
            $data = User::all();
            return view('user',['User'=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $User)
    {
        if (Gate::denies('access-admin')){
            abort('403');
         }
        return view('user.edit',compact('User'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update( UpdateUserRequest $request,User $User)
    {
        if (Gate::denies('access-admin')){
            abort('403');
         }
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
        if (Gate::denies('access-admin')){
            abort('403');
         }
        $User->delete();

        return redirect()->route('user.index')

                        ->with('success','User deleted successfully');
    }
}
