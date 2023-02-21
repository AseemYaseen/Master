<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Appartment;
use Illuminate\Http\Request;
use App\Models\range;


class AppartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $appartments= Appartment::all();

        return view('Admin.Appartments',compact('appartments'));

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $ranges= range::all();
        return view('Admin.AppartmentsAdd', compact('ranges'));
    }

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Appartment = New Appartment();
        $Appartment->location = $request->Location;
        $Appartment->price = $request->price;
        $Appartment->description = $request->description;
        $Appartment->ranges_id = 1;

        $photoName = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image', $photoName);
        $Appartment->image = $photoName;
        
        $Appartment->save();
        return redirect()->route('Appartments.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appartment  $appartment
     * @return \Illuminate\Http\Response
     */

    public function show(Appartment $range,$id)
    {
        $AppartmentDetails = Appartment::findorFail($id);
        $range = range::findorFail($AppartmentDetails->ranges_id);

  
        return view('Admin.AppartmentsDetails',compact('AppartmentDetails', 'range'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appartment  $appartment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $AppartmentsEdit = Appartment::findorFail($id);
 
        $AppartmentsRange=range::all();

           return view('Admin.AppartmentsEdit',compact('AppartmentsEdit', 'AppartmentsRange'));

       }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appartment  $appartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appartment $appartment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appartment  $appartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appartment $appartment)
    {
        //
    }
}
