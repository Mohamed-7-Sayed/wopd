<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index() {
        $users = User::get();
        return view('admin.dashboard',compact('users'));
    }

    public function makeDesigners(User $user) {
        $user->role = 2;
        $user->save();
        return redirect(route('users'));
      }

}
