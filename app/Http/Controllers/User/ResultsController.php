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
            //this is to get the apartments data that have the same range_id as the last result
            $appartments = Appartment::where('ranges_id', $lastResult->budget_Range)->get();

            $AparaveragePrice = number_format($appartments->avg('price'), 1);
            $AparhighestPrice = $appartments->max('price');
            $AparlowestPrice = $appartments->min('price');

            $restaurants = Restaurant::where('ranges_id', $lastResult->budget_Range)->get();

            $RestaveragePrice = number_format($restaurants->avg('price'), 1);
            $ResthighestPrice = $restaurants->max('price');
            $RestlowestPrice = $restaurants->min('price');

            $highestPlus = $AparhighestPrice + $ResthighestPrice; 
            $LowestPlus = $AparlowestPrice + $RestlowestPrice ; 
            $AverPlus = ($highestPlus + $LowestPlus)/2 ; 
            
            
            return view('userSide.result', compact('lastResult', 'appartments', 'restaurants', 'AparhighestPrice', 'AparlowestPrice', 'AparaveragePrice', 'ResthighestPrice', 'RestlowestPrice', 'RestaveragePrice' , 'highestPlus', 'LowestPlus', 'AverPlus'));
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

    return redirect()->route('results', $result);
}


}
