<?php

namespace App\Conversations;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class ServiceOptionConversation extends Conversation
{
    public function askReason()
    {
        $question = Question::create("How do you want your Order Delivered?")
            ->fallback('Unable to ask question')
            ->callbackId('ask_reason')
            ->addButtons([
                Button::create('Pick Up')->value('pickup'),
                Button::create('Delivery')->value('delivery'),
            ]);

        return $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                if ($answer->getValue() === 'pickup') {
                    $this->bot->userStorage()->save([
                        'delivery_type' => $answer->getText(),
                    ]);
        
                    $this->pickupdate();
                } else {
                   
                    $this->deliveryAddress();
                }
            }
        });
    }

    public function pickupdate()
    {
        $this->ask('When will you like to come pick your order (DATE: DD/MM/YY)?', function (Answer $answer) {
            $this->bot->userStorage()->save([
                'pickupdate' => $answer->getText(),
            ]);

            $this->say('Great');
            $this->askpickuptime();
        });
    }
    public function askpickuptime()
    {
        $this->ask('What time (TIME HH:MM)?', function (Answer $answer) {
            $this->bot->userStorage()->save([
                'pickuptime' => $answer->getText(),
            ]);

            $this->say('Time Confirmed');
            $this->bot->startConversation(new BookingPickUpConversation());
        });
    }
    public function deliveryAddress()
    {
        $this->ask('Where will you like your order delivered (Address)?', function (Answer $answer) {
            $this->bot->userStorage()->save([
                'delivery_address' => $answer->getText(),
            ]);

            $this->say('Great');
            $this->bot->startConversation(new BookingConversation());
        });
    }
    public function run()
    {
        $this->askReason();
    }
}
