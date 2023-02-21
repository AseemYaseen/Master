<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\range;
use Illuminate\Http\Request;


class RangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ranges= range::all();
        return view('Admin.Ranges', compact('ranges'));
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
     * @param  \App\Models\range  $range
     * @return \Illuminate\Http\Response
     */
    public function show(range $range)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\range  $range
     * @return \Illuminate\Http\Response
     */
    public function edit(range $range)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\range  $range
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, range $range)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\range  $range
     * @return \Illuminate\Http\Response
     */
    public function destroy(range $range)
    {
        //
    }
}
