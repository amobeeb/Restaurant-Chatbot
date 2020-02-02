<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use App\BookingDeliver;
use App\BookingPick;
class BookingConversation extends Conversation
{
   
    public function confirmBooking()
    {
        $user = $this->bot->userStorage()->find();
       $name = $user->get('name');
       $email = $user->get('email');
       $mobile = $user->get('mobile');
       $service = $user->get('service');
       $price = $user->get('service_price');
       $delivery_address = $user->get('delivery_address');
       
        // SELECT `id`, `name`, `email`, `mobile`, `service`, `price`, `date`, `time`, `created_at`, `updated_at` FROM `bookings` WHERE 1
        $message = '------------------------------------------------ <br>';
        $message .= 'Name : '.$name.'<br>';
        $message .= 'Email : '.$email.'<br>';
        $message .= 'Mobile : '.$mobile.'<br>';
        $message .= 'Service : '.$service.'<br>';
        $message .= 'Service Price : '.$price.'<br>';
        $message .= 'Delivery Address : '.$delivery_address.'<br>';
        $message .= '------------------------------------------------';

        $this->say('Great. Your booking has been confirmed. Here is your booking details. <br><br>'.$message);
        $this->savebooking($name, $email, $mobile, $service, $price, $delivery_address);
        $this->say('<a target="_blank" href="/order/'.$email.'/'.$price.'/'.$mobile.'">Make Payment</a>');
    }

    public function savebooking($name, $email, $mobile, $service, $price, $address)
    {
        $booking = new BookingDeliver;
        $booking->name = $name;
        $booking->email = $email;
        $booking->mobile = $mobile;
        $booking->service = $service;
        $booking->price = $price;
        $booking->address =$address;
        $booking->save();
   
    }
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->confirmBooking();
    }
}
