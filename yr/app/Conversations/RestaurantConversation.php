<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class RestaurantConversation extends Conversation
{
    /**
     * First question
     */
    public function askReason()
    {
        $question = Question::create("Welcome to Bling Restaurant! User our virtual assistant you can order fodd for delivery with just a few taps. How can we help you?")
            ->fallback('Unable to ask question')
            ->callbackId('ask_reason')
            ->addButtons([
                Button::create('Food Delivery')->value('delivery'),
                Button::create('Contact Us')->value('contact'),
            ]);

        return $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                if ($answer->getValue() === 'delivery') {
                    // $joke = json_decode(file_get_contents('http://api.icndb.com/jokes/random'));
                    $this->say("
                     
                    Eba and Egusi
                    Amala and Ewedu
                    Starch with Okra
                    
                    
                    ");
                } else {
                    $this->say("Contact Us at Bling@yahoo.com");
                }
            }
        });
    }

    /**
     * Start the conversation
     */
    public function run()
    {
        $this->askReason();
    }
}
