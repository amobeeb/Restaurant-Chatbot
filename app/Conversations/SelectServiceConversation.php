<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use App\Service;
use DB;
class SelectServiceConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */

    public function btn()
    {
        $service = DB::table('services')->get();
        // $a[] = Button::create('Hair')->value('Hair');
        // $a[] = Button::create('Hair')->value('Hair');
        foreach($service as $service=>$serviceval)
                    {
                        $a[] = Button::create($serviceval->service.'- N'.$serviceval->service_price)->value($serviceval->service);
                        // $questionTemplate->addButton(Button::create($serviceval->service)->value($serviceval->service));
                    }
        return $a;
    }

    public function askbtn()
    {
        $service = DB::table('services')->get();
        // $a[] = Button::create('Hair')->value('Hair');
        // $a[] = Button::create('Hair')->value('Hair');
        foreach($service as $service=>$serviceval)
                    {
                        $a[] = Button::create($serviceval->service)->value($serviceval->service);
                        // $questionTemplate->addButton(Button::create($serviceval->service)->value($serviceval->service));
                    }
        return $a;
    }

    public function askService()
    {
        // $questionTemplate = Question::create($question->text);
      
        $question = Question::create('What kind of Service you are looking for?')
            ->callbackId('select_service')
            ->addButtons(
                $this->btn()
              
        );
       
        
        $this->ask($question, function(Answer $answer) {
            $service = DB::table('services')->where('service','=',$answer)->get();
            $result = json_decode($service, true);
            $service = $result[0]['service'];
            $price = $result[0]['service_price'];
            if ($answer->getValue() === $service) {
                $this->bot->userStorage()->save([
                    'service' => $answer->getValue(),
                    'service_price' => $price,
                ]);
            
        }
      
                $this->bot->startConversation(new ServiceOptionConversation());
                
        });
    
    }

    public function run()
    {
        $this->askService();
    }
}
