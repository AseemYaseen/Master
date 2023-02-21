<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Playgrounds;
use App\Models\Categories;
use Illuminate\Http\Request;

class PlaygroundsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playgrounds= Playgrounds::all();
        return view('Admin.playgrounds', compact('playgrounds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $playgrounds= Playgrounds::with('Categories')->get();
        $categories= Categories::all();

        return view('Admin.playgroundsAdd',compact('categories'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $playgrounds = New Playgrounds();
        $playgrounds->name = $request->name;
        $playgrounds->price = $request->price;
        $playgrounds->description = $request->description;
        $playgrounds->category_id = $request->category_id;

        $photoName = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image', $photoName);
        $playgrounds->image = $photoName;
        $playgrounds->save();
        return redirect()->route('playgrounds.index');
        // return view('Admin.categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Playgrounds  $Playgrounds
     * @return \Illuminate\Http\Response
     */
    public function show(Playgrounds $categories,$id)
    {
        $playgroundsDetails = Playgrounds::findorFail($id);
        $categories = Categories::findorFail($playgroundsDetails->category_id);

        //    $playgroundsDetails = Playgrounds::with('Categories')->get();
           

        // $categories = Categories::get();
        // $data = [];
        // foreach ($trips as $trip) {
        //     $data[] = [
        //         'id' => $trip->id,
        //         'name' => $trip->name,
        //         'short_description' => $trip->short_description,
        //         'long_description' => $trip->long_description,
        //         'guest_number' => $trip->guest_number,
        //         'price' => $trip->price,
        //         'image' => $trip->image,
        //         'category' => isset($trip->category) ? $trip->category->name : "",


        //     ];
        // }
        return view('Admin.playgroundsDetails',compact('playgroundsDetails', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Playgrounds  $Playgrounds
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $categories = Categories::all();
        $playgroundsEdit = Playgrounds::findorFail($id);
        // $playgroundsEdit = Playgrounds::where();
        $playgroundsCat=Categories::all();
        // $playgroundsCat= Playgrounds::with('Categories')->get();
        //    $Playgrounds = Categories::where('id',$id)->first(); //  method 2 -- when id = id - get the data of the first row
           return view('Admin.playgroundsEdit',compact('playgroundsEdit', 'playgroundsCat'));
        //    $data = [];
        //    foreach ($playgroundsEdit as $playgrounds) {
        //        $data[] = [
        //            'id' => $playgrounds->id,
        //            'name' => $playgrounds->name,
        //            'description' => $playgrounds->description,
        //            'price' => $playgrounds->price,
        //            'image' => isset($playgrounds->category_id) ? $playgrounds->name->category_id : ""
        //        ];
        //    };
        //    return view('Admin.playgroundsEdit',compact('data'));
       }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Playgrounds  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $playgroundsEdit = Playgrounds::findorFail($id);
        $playgroundsEdit->update($request->all());
        return redirect()->route('playgrounds.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Playgrounds  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Playgrounds $categories,$id)
    {
        Playgrounds::destroy($id);
        return redirect()->route('playgrounds.index');
    }
}
