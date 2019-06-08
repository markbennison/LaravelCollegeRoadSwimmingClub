<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view', auth()->user());
        //abort_unless(auth()->user()->roleid == 5, 403);
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('view', auth()->user());
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        $this->authorize('view', auth()->user());
        //User::create(request(['username', 'email', 'password', 'forename', 'surname', 'dateofbirth', 'gender', 'telephone', 'address1', 'address2', 'city' ,'postcode', 'roleid', 'registrationdate']));
        User::create([
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['plain_password']),
            'forename' => $request['forename'], 
            'surname' => $request['surname'], 
            'dateofbirth' => $request['dateofbirth'], 
            'gender' => $request['gender'], 
            'telephone' => $request['telephone'], 
            'address1' => $request['address1'], 
            'address2' => $request['address2'], 
            'city' => $request['city'],
            'postcode' => $request['postcode'], 
            'roleid' => $request['roleid'], 
            'registrationdate' => $request['registrationdate']
        ]);
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->authorize('view', auth()->user());
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //$this->authorize('view', $user);
        $this->authorize('view', auth()->user());
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->authorize('view', auth()->user());
        //User::update(request(['username', 'email', 'password', 'forename', 'surname', 'dateofbirth', 'gender', 'telephone', 'address1', 'address2', 'city' ,'postcode', 'roleid', 'registrationdate']));
        $user->update([
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['plain_password']),
            'forename' => $request['forename'], 
            'surname' => $request['surname'], 
            'dateofbirth' => $request['dateofbirth'], 
            'gender' => $request['gender'], 
            'telephone' => $request['telephone'], 
            'address1' => $request['address1'], 
            'address2' => $request['address2'], 
            'city' => $request['city'],
            'postcode' => $request['postcode'], 
            'roleid' => $request['roleid'], 
            'registrationdate' => $request['registrationdate']
        ]);

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users');
    }
}
