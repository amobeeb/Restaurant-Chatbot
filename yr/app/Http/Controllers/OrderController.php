<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class OrderController extends Controller
{
    public function order()
    {
        $paymentDeliver = Payment::get();
        return view('payment')->with('payment', $paymentDeliver);
    }
    public function index($email, $amount, $mobile){
        return view('order')
        ->with('email',$email)
        ->with('amount',$amount)
        ->with('mobile',$mobile);
    }
    public function status(Request $request, $ref,$mobile,$amount)
    {
       
        $pay = new Payment;
        $pay->ref = $ref;
        $pay->mobile = $mobile;
        $pay->amount = $amount;
        $pay->save();
        return redirect('/');
    }
}
