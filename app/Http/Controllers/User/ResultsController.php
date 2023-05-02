<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Appartment;
use App\Models\Restaurant;
use App\Models\range;

use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function index()
    {
        $lastResult = range::orderBy('id', 'desc')->first();
    
        if (auth()->check()) {
            // Get the apartments data that have the same range_id as the last result
            $appartments = Appartment::where('ranges_id', $lastResult->budget_Range)->get();
            $restaurants = Restaurant::where('ranges_id', $lastResult->budget_Range)->get();
            
            return view('userSide.result', compact('lastResult', 'appartments', 'restaurants'));
        } else {
            return redirect()->route('user.login');
        }
    }
    
    public function saveResults(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'budget' => 'required',
        'stay' => 'required',
    ]);

    // Save the results to the database
    $result = new range;
    $result->budget_Range = $validatedData['budget'];
    $result->stay = $validatedData['stay'];
    $result->save();

    // Redirect to the results page with the saved values
    return redirect()->route('results', $result);
}


}
