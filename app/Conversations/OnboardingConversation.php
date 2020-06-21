<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class OnboardingConversation extends Conversation
{
    protected $firstname;
    /**
     *
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        //
       $this->askFirstName();
    }

    public function askFirstname()
    {
        $this->ask('Hello! What is your firstname?', function(Answer $answer) {
            // Save result
            $this->firstname = $answer->getText();
            $this->say('Nice to meet you '.$this->firstname);
            $this->askEmail();
        });
    }

    public function askMood()
{
    $this->ask('How are you?', function (Answer $response) {
        $this->say('Cool - you said ' . $response->getText());
    });
}
}
