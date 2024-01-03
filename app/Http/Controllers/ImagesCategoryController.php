<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Create;
use App\Models\ImagesCategory;
use Illuminate\Http\Request;

class ImagesCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImagesCategory  $imagesCategory
     * @return \Illuminate\Http\Response
     */
    public function show($imagesCategory)
    {
        $category = Category::find($imagesCategory);
        $creates = Create::where('category_id', $imagesCategory)->get();
        return view('categories.images_category', compact('category', 'creates'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImagesCategory  $imagesCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ImagesCategory $imagesCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImagesCategory  $imagesCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImagesCategory $imagesCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImagesCategory  $imagesCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImagesCategory $imagesCategory)
    {
        //
    }
}
