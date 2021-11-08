<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Client_user;
use App\Models\Client;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $client_name = "";
        if ($user->role === "Client") {
            $client = Client_user::where('user_id', Auth::id())->first();
        $client_name = Client::where('id', $client->id)->first();
        }
        if ($user->hasRole('Admin')) {
            $users = User::where('role', 'Client')->latest()->get();
        } elseif($user->hasRole('Client')) {
            $users = Client_user::where('client_id', $client->id)->with(['users'])->latest()->get();
        }
        
      // dd($users);
        return view('users.index', compact('users','client_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $clients = Client::all();
        return view('users.create', compact('roles', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'password' => ['required', 'confirmed'],
        ]);

        if ($request->role === "Client") {
            $this->validate($request, [
                'client_id' => ['required'],
            ]);
        }
        //save user
        $user = User::create(array_merge($request->all(), ['password' => Hash::make($request->password)]));
        //save role
        $user->assignRole($request->role);
        //save user to client if so
        if ($request->client_id != "") {
            Client_user::create([
                'user_id' => $user->id,
                'client_id' => $request->client_id,
            ]);
        }
        return back()->withStatus('User created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
