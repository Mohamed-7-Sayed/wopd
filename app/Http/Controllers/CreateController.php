<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\UploadFile;

class CreateController extends Controller
{
    use UploadFile;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        $creates = Create::get();
        return view('designers.create',compact('categories','creates'));
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
        $creates = Create::create([
            'title' => $request->Title,
            'description' => $request->Description,
            'price' => $request->Price,
            'currency' => $request->Currency,
            'image'  =>  $this->uploadFile($request->Image, 'imgs'),
            'category_id' => $request->category_id,
            'Created_by' => Auth::user() -> id,
        ]);
        session()->flash('Add', 'تم اضافة المنتج بنجاح ');
        return redirect(route('create.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Create  $create
     * @return \Illuminate\Http\Response
     */
    public function show(Create $create)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Create  $create
     * @return \Illuminate\Http\Response
     */
    public function edit(Create $create)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Create  $create
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Create $create)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Create  $create
     * @return \Illuminate\Http\Response
     */
    public function destroy(Create $create)
    {
        //
    }
}
