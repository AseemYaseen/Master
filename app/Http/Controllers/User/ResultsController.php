<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\range;

use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function index()
    {
        if(auth()->check()){
        return view('userSide.result');
        }else{
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
