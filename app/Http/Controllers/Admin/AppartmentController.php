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
        $validatedData = $request->validate([
            'location' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'value' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'location.required' => 'The restaurant location field is required.',
            'price.required' => 'The price per meal field is required.',
            'price.numeric' => 'The price per meal field must be a number.',
            'description.required' => 'The restaurant info field is required.',
            'value.required' => 'The category field is required.',
            'image.required' => 'The image field is required.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The file must be a jpeg, png, jpg, gif, or svg.',
            'image.max' => 'The file size must be less than or equal to 2048 kilobytes.',
        ]);
    
        $appartment = new Appartment();
        $appartment->location = $validatedData['location'];
        $appartment->price = $validatedData['price'];
        $appartment->description = $validatedData['description'];
        $appartment->ranges_id = $validatedData['value'];
        $photoName = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image', $photoName);
        $appartment->image = $photoName;
        
        $appartment->save();
    
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
        // $range = range::findorFail($AppartmentDetails->ranges_id);

        return view('Admin.AppartmentsDetails',compact('AppartmentDetails'));
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
    public function update(Request $request, $id)
    {
        $AppartmentsUpdate = Appartment::findorFail($id);
        $AppartmentsUpdate->ranges_id = $request->input('ranges_id');
        $AppartmentsUpdate->update($request->all());
        return redirect()->route('Appartments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appartment  $appartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appartment $appartment,$id)
    {
        Appartment::destroy($id);
        return redirect()->route('Appartments.index');
    }
}

?>
