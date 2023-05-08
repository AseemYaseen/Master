<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\range;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class AdminDashboardController extends Controller
{
    public function index()
    {
        $usersCount = User::count();

        $mostRepeatedBudget = Range::groupBy('budget_Range')
        ->select('budget_Range', DB::raw('COUNT(*) as count'))
        ->orderByDesc('count')
        ->get();

        // dd($mostRepeatedBudget);

        return view('Admin.welcome', compact('usersCount', 'mostRepeatedBudget'));
    }
}

