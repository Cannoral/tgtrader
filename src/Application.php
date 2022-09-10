<?php

namespace App;

use danog\MadelineProto\API;


class Application 
{
    private $mandelineProto;

    public function __construct()
    {
        $this->mandelineProto = new API('session.madeline');
        $this->mandelineProto->async(false);
        $this->mandelineProto->start();
    }

    public function run()
    {
        $messages_Messages = $this->mandelineProto->messages->getHistory(
            ['peer' => $_ENV['chatid'], 
            'offset_id' => 0, 
            'offset_date' => 0, 
            'add_offset' => 0, 
            'limit' => 100, 
            'max_id' => 0, 
            'min_id' => 0, 
            'hash' => 0 ]
        );
        
        print_r($messages_Messages);
    }
}