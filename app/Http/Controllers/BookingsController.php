<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function create(Request $request, Hotel $hotel)
    {
        $room_type_name = $request->room_type_name;

        return view('bookings.create', compact('hotel', 'room_type_name'));
    }
}
