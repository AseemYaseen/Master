<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Reservations;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations= Reservations::all();

        return view('Admin.reservation', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($request)
    {
        // UserReservation::create($request->all());
        // return view('puplicUser.reservation');

        // $Reservations = New Reservations();
        // $Reservations->first_name = $request->first_name;
        // $Reservations->last_name = $request->last_name;
        // $Reservations->phone_number = $request->phone_number;
        // $Reservations->Start_date = $request->Start_date;
        // $Reservations->End_date = $request->End_date;
        // $Reservations->save();
        // return redirect()->route('reservation.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function show(Reservations $reservations)
    {

        return view('puplicUser.reservation');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservations $reservations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
            $Statuss = Reservations::findorFail($id);

            if ($Statuss->Status == 'pending'){ 
                $Statuss->Status = 'Accepted'; 
            }else{
                $Statuss->Status = 'pending'; 
            }
            $Statuss->save();
            return redirect()->route('reservation.index');
        
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservations $reservations, $id)
    {
        $reservation = Reservations::findorFail($id);
        $reservation->Status ='2';
        $reservation->save();
        return redirect()->route('reservation.index');

    }
}
