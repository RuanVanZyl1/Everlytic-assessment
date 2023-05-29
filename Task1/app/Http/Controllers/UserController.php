<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
      $users = User::all();
       return view('users.index', ['users' => $users]);
    }

    public function create(){
        return view('users.create');
     }

     public function store(Request $request){
         $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'position' => 'required',
         ]);

         $newUser = User::create($data);

         return redirect(route('user.index'));
   }

      public function delete(User $user){
         $user->delete();
         return redirect(route('user.index'))->with('success', 'User Deleted Successfully');
      }
}
