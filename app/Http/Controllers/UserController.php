<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all the data from the database
        $user = User::all();

        //returning everything to the view
        return view('account', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = User::all();
        $permissions = Permission::all();
        $roles = Role::all();
        return view('accountcreate', compact('user', 'permissions', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        //adding a new Cooking Item (using the Model User)
        //$validated = $request->validated();
        $role = Role::findById($request->role);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = now();
        $user->password = Hash::make($request->password);
        $user->syncPermissions($request->permissions);
        $user->assignRole($role);

        //save items in the database
        $user->save();

        return redirect()->route('account.index')->with('message', 'User has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $account)
    {
        //
        return view('accountshow', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $account)
    {
        //
        return view('accountedit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $account)
    {
        //
        $account->name = $request->name;
        $account->email = $request->email;
        $account->password = bcrypt($request->password);
        // save user
        $account->save();

        return redirect()->route('account.index')->with('message', 'User updated');
    }

    public function delete(User $account)
    {
        //
        return view('accountdelete', compact('account'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $account)
    {
        //
        $account->delete();
        return redirect()->route('account.index')->with('message', 'User Deleted');
    }
}
