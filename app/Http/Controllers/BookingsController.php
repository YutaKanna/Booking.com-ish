<?php

namespace App\Http\Controllers;

use App\Http\Requests\Bookings\BookingsCreateRequest;
use App\Hotel;


class BookingsController extends Controller
{
    public function create(BookingsCreateRequest $request, Hotel $hotel)
    {
        $hoge = $hotel;
        dd($hoge);
        return view('bookings.create');
    }
}
