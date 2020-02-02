<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Booking;
use DB;
class TestController extends Controller
{
    public function test()
    {
        // $aa = 08900;
        $booking = new Booking;
        $booking->name = "Habeeb";
        $booking->email = "amobeeb@gm.com";
        $booking->mobile = $aa;
        $booking->service = "dodo";
        $booking->price = 200;
        $booking->date = "23";
        $booking->time = "323";
        $booking->save(); 
     
    //    foreach($service as $service=>$serviceval)
    //    {
    //        echo $serviceval->service;
    //    }
    }
}
