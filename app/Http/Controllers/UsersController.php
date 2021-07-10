<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return view('users.index' , ['users' => User::where('role' , '!=' , 'master')->get()]);
    }

    public function updateUserRole(Request $request , User $user){
        $request->validate([
            'role' => 'required'
        ]);
        $user->role = $request->role;
        $user->save();

        if($user->wasChanged()){
            return back()->with('success' , 'user role updated');
        }

        return back()->with('failure' , 'nothing was updated');
    }

    public function destroy(User $user){

        if($user->role == 'master'){
            abort(401);
        }
        
        $user->delete();
        return back()->with('success' , 'user deleted');
    }
}
