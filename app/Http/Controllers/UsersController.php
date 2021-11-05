<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\RoleUser;


class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        // dd($users);
        return view('users.index', compact('users'));
    }
    public function create()
    {
        $roles = Role::all();
        
        return view('users.create',compact('roles'));
    }
    public function store(Request $request)
    {
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password= Hash::make($request->password);
        $user->role_id=$request->role_id;
        $user->updated_by=Auth::user()->id;
        if($user->save())
        {
            if($request->roles !=null) {
                foreach ($request->roles as $role) {
                    $role_user = new RoleUser();
                    $role_user->user_id = $user->id;
                    $role_user->role_id = $role;
                    $role_user->updated_by = Auth::user()->id;
                    $role_user->save();
                }
            }
        }
        return redirect()->route('users.index');
    }
    public function edit(User $user)
    {
        $user=User::where('id',$user->id)->first();
        $users = User::where('role_id',$user->id)->get();
        $roles =Role::all();
    
        return view('users.edit', compact('users','user','roles'));
    }
    public function update( Request $request,User $user)
    {
        $user->name=$request->name;
        $user->email=$request->email;
        $user->role=$request->role;
        if($request->password!=null)
        {
            $user->password= Hash::make($request->password);
        }
        $user->updated_by=Auth::user()->id;
        if($user->save())
        {
            RoleUser::where('user_id',$user->id)->delete();

            if($request->roles !=null) {
                foreach ($request->roles as $role) {
                    $role_user = new RoleUser();
                    $role_user->user_id = $user->id;
                    $role_user->role_id = $role;
                    $role_user->updated_by = Auth::user()->id;
                    $role_user->save();
                }
            }

        }
          return redirect()->route('users.index');
        
    }
    public function show(User $user)
    {
        
        $user->load('roles');

        return view('users.show', compact('user'));
    }
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
    public function c()
    {
        echo "<br>Test Controller.";
    }

}
