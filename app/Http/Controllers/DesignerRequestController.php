<?php

namespace App\Http\Controllers;

use App\Models\DesignerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\UploadFile;

class DesignerRequestController extends Controller
{
    use UploadFile;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('designers.designer_request');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $designers_request = DesignerRequest::create([
            'first_name' => $request->First_Name,
            'last_name' => $request->Last_Name,
            'email' => $request->Email,
            'job' => $request->Job,
            'age' => $request->Age,
            'yourself' => $request->Yourself,
            'year' => $request->Year,
            'month' => $request->Month,
            'day' => $request->Day,
            'image'  =>  $this->uploadFile($request->Image, 'imgs'),
            'Created_by' => Auth::user()->id,
        ]);
        return redirect(route('DesignerRequest.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DesignerRequest  $designerRequest
     * @return \Illuminate\Http\Response
     */
    public function show(DesignerRequest $designerRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DesignerRequest  $designerRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(DesignerRequest $designerRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DesignerRequest  $designerRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DesignerRequest $designerRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DesignerRequest  $designerRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(DesignerRequest $designerRequest)
    {
        //
    }
}
