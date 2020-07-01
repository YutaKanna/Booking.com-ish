<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels.index', ['hotels' => $hotels]);
    }

    // ホテルの詳細画面からRoomTypeを選択できるようにする
    public function show(Hotel $hotel)
    {
        return view('hotels.show', ['hotel' => $hotel]);
    }
}
