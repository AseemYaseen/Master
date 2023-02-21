<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Categories::all();
        return view('Admin.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.categoriesAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = New Categories();
        $categories->name = $request->name;
        $categories->description = $request->description;
        $photoName = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image', $photoName);
        $categories->image = $photoName;
        $categories->save();
        return redirect()->route('categories.index');
        // return view('Admin.categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories,$id)
    {
        $categorieDetails = Categories::findorFail($id); 
        return view('Admin.categoriesDetails',compact('categorieDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $CategoriesEdit = Categories::findorFail($id); 
        //    $MovieEdit = Categories::where('id',$id)->first(); //  method 2 -- when id = id - get the data of the first row
           return view('Admin.categoriesEdit',compact('CategoriesEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $CategoriesEdit = Categories::findorFail($id);
        $CategoriesEdit->update($request->all());
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $categories,$id)
    {
        Categories::destroy($id);
        return redirect()->route('categories.index');
    }
}
