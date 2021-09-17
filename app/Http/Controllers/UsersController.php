<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        return view('users.index', compact('users'));
    }
    public function create()
    {
        // $roles = Role::all()->pluck('title', 'id');
        return view('users.create');
    }
    public function store(Request $request)
    {
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password= Hash::make($request->password);
        $user->role=$request->role;
        $user->updated_by=Auth::user()->id;
        $user->save();
            return redirect()->route('users.index');
    }
    public function edit(User $user)
    {
    
        return view('users.edit', compact('user'));
    }
    public function update( Request $request,User $user)
    {
        $user->name=$request->name;
        $user->email=$request->email;
        if($request->password!=null)
        {
            $user->password= Hash::make($request->password);
        }
        $user->updated_by=Auth::user()->id;
        $user->save();

            return redirect()->route('users.index');
        
    }
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }

}
