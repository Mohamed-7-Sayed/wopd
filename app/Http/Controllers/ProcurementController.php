<?php

namespace App\Http\Controllers;

use App\Models\Procurement;
use Illuminate\Http\Request;
use App\Helpers\UploadFile;
use App\Models\Create;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProcurementController extends Controller
{
    use UploadFile;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $procurements = Procurement::get();
       $users = User::get();
       $creates = Create::get();
       return view('photo.photo',compact('procurements','user','creates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function makeStatus($procurement) {
        $procurement->status = 'active';
        $procurement->save();
        return redirect(route('procurement.status'));
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $procurement = Procurement::create([
        'image'  =>  $this->uploadFile($request->Image, 'imgs'),
        'create_id' => $request->create_id,
        'status' => $request->status,
        'Created_by' => Auth::user()->id,
        ]);
        return redirect(back());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Procurement  $procurement
     * @return \Illuminate\Http\Response
     */
    public function show(Procurement $procurement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Procurement  $procurement
     * @return \Illuminate\Http\Response
     */
    public function edit(Procurement $procurement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Procurement  $procurement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procurement $procurement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Procurement  $procurement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Procurement $procurement)
    {
        //
    }
}
