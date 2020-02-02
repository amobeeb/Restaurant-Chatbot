<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use App\BookingPick;
class BookingPickUpConversation extends Conversation
{
    public function confirmBooking()
    {
       $user = $this->bot->userStorage()->find();
       $name = $user->get('name');
       $email = $user->get('email');
       $mobile = $user->get('mobile');
       $service = $user->get('service');
       $price = $user->get('service_price');
       $date = $user->get('pickupdate');
       $time = $user->get('pickuptime');
       
        // SELECT `id`, `name`, `email`, `mobile`, `service`, `price`, `date`, `time`, `created_at`, `updated_at` FROM `bookings` WHERE 1
        $message = '------------------------------------------------ <br>';
        $message .= 'Name : '.$name.'<br>';
        $message .= 'Email : '.$email.'<br>';
        $message .= 'Mobile : '.$mobile.'<br>';
        $message .= 'Service : '.$service.'<br>';
        $message .= 'Service Price : '.$price.'<br>';
        $message .= 'Pick Up Date : '.$date.'<br>';
        $message .= 'Pick Up Time : '.$time.'<br>';
        $message .= '------------------------------------------------';

        $this->say('Great. Your booking has been confirmed. Here is your booking details. <br><br>'.$message);
        $this->savebooking($name, $email, $mobile, $service, $price, $date, $time);
        $this->say('<a target="_blank" href="/order/'.$email.'/'.$price.'/'.$mobile.'">Make Payment</a>');
    }

    public function savebooking($name, $email, $mobile, $service, $price, $date, $time)
    {
        $booking = new BookingPick;
        $booking->name = $name;
        $booking->email = $email;
        $booking->mobile = $mobile;
        $booking->service = $service;
        $booking->price = $price;
        $booking->date =$date;
        $booking->time = $time;
        $booking->save();

        // $booking->name = $user->get('name');
        // $booking->email = $user->get('email');
        // $booking->mobile = $user->get('mobile');
        // $booking->service = $user->get('service');
        // $booking->price = $user->get('price');
        // $booking->date = $user->get('date');
        // $booking->time = $user->get('time');(
        
    }
    public function run()
    {
        $this->confirmBooking();
    }
}
