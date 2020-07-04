<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Customer;
use App\Hotel;
use App\Room;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function create(Request $request, Hotel $hotel)
    {
        $room_id = $request->room_id;
        $room = Room::find($room_id);
        $room_type_name = $room->roomtype->name;

        return view('bookings.create', compact('hotel', 'room', 'room_type_name'));
    }

    public function store(Request $request, Room $room)
    {
        $customer = new Customer;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        // just fill in to succsss booking
        $customer->phone = 123456789;
        $customer->save();

        $booking = new Booking;
        $booking->customer_id = $customer->id;
        $booking->room_id = $room->id;
        // just fill in to succsss booking
        $booking->check_in = "2020-07-01 11:33:54";
        $booking->check_out = "2020-07-01 11:33:54";
        $booking->price = 5000;
        // end
        $booking->save();

        return redirect()->route('hotels.index')->with('success_message', ('予約完了しました'));
    }
}
