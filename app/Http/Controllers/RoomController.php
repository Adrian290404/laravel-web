<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $dates = null;
        
        if ($request->has(['date-start', 'date-end']) && $request->input('date-start') && $request->input('date-end')) {
            try {
                $dateStart = Carbon::parse($request->input('date-start'));
                $dateEnd   = Carbon::parse($request->input('date-end'));
                $dates = [
                    'start' => $dateStart,
                    'end'   => $dateEnd,
                ];
            } 
            catch (\Exception $e) {
                return redirect()->back()->with('error', 'Formato de fecha inválido.');
            }
            $rooms = Room::where('avaiable', true)->whereDoesntHave('bookings', function($query) use ($dateStart, $dateEnd) {
                $query->where('check_in', '<', $dateEnd)->where('check_out', '>', $dateStart);
            })->get();
        } 
        else {
            $rooms = Room::all();
        }

        return view('hotel.rooms', compact('rooms', 'dates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $room = Room::findOrFail($id);
        return view('hotel.roomDetails', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
