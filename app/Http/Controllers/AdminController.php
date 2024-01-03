<?php

namespace App\Http\Controllers;

use App\Models\DesignerRequest;
use App\Models\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('is.admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designers_request = DesignerRequest::get();
        $users = User::get();
        return view('admin.dashboard',compact('users','designers_request'));
    }

}
