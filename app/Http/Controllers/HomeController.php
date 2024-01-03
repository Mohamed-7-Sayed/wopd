<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Create;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $creates = Create::get();
        $categories = Category::get();
        $users = User::where('role',2)->get();
        return view('home',compact('creates','categories','users'));
    }
}
