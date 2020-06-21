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
        $this->askName();
    }

    public function askName()
    {
        $this->ask('What is your name?', function(Answer $answer) {
            $this->firstname = $answer->getText();

            $this->say('Nice to meet you '.$this->firstname);
        });

        $this->askMood();
    }

    public function askMood()
{
    $this->ask('How are you?', function (Answer $response) {
        $this->say('Cool - you said ' . $response->getText());
    });
}
}
