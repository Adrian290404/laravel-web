<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function home()
    {
        $rooms = Room::inRandomOrder()->take(3)->get();
        return view('hotel.home', compact('rooms'));
    }
}