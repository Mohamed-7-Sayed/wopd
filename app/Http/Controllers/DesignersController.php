<?php

namespace App\Http\Controllers;

use App\Models\Procurement;
use App\Models\User;
use Illuminate\Http\Request;

class DesignersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('is.designers');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procurements = Procurement::get();
        $user = User::get();
        return view('designers.dashboard',compact('procurements','user'));
    }
}
