<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\BookingDeliver;
use App\BookingPick;
class BookingController extends Controller
{
    public function index()
    {
        $booking = Booking::get();
        return view('booking')->with('booking',$booking);
    }
    public function delivery()
    {
        $bookingDeliver = BookingDeliver::get();
        return view('booking')->with('booking', $bookingDeliver);
    }
    public function pickup()
    {
        $bookingPick = BookingPick::get();
        return view('booking-pick')->with('booking', $bookingPick);
    }
}
