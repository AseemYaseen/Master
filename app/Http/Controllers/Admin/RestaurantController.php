<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Models\range;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::All();
        return view('Admin.Restaurants',compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ranges= range::all();
        return view('Admin.RestaurantsAdd', compact('ranges'));
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
            'name' => 'required',
            'location' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'value' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'name.required' => 'The restaurant name field is required.',
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
    
        $Restaurant = new Restaurant();
        $Restaurant->name = $validatedData['name'];
        $Restaurant->location = $validatedData['location'];
        $Restaurant->price = $validatedData['price'];
        $Restaurant->description = $validatedData['description'];
        $Restaurant->ranges_id = $validatedData['value'];
        
        $photoName = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image', $photoName);
        $Restaurant->image = $photoName;
    
        $Restaurant->save();
    
        return redirect()->route('Restaurants.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    
    public function show(Restaurant $range,$id)
    {
        $RestaurantsDetails = Restaurant::findorFail($id);
        // $range = range::findorFail($RestaurantsDetails->ranges_id);

        return view('Admin.RestaurantsDetails',compact('RestaurantsDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant, $id)
    {
        $RestaurantsEdit = Restaurant::findorFail($id);
 
        $RestaurantsRange=range::all();

           return view('Admin.RestaurantsEdit',compact('RestaurantsEdit', 'RestaurantsRange'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $RestaurantUpdate = Restaurant::findorFail($id);
        $RestaurantUpdate->update($request->all());
        return redirect()->route('Restaurants.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant, $id)
    {
        Restaurant::destroy($id);
        return redirect()->route('Restaurants.index');
    }
}
