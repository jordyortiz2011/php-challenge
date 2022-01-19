<?php

namespace App;

require './vendor/autoload.php';
use Twilio\Rest\Client;

class Sms
{
    protected $number;
    protected $body;
    protected $state = FALSE; //TRUE: SMS send successful  | FALSE: error to send SMS
	
	function __construct($Number , $Body)
	{
		$this->number   = $Number;
		$this->body     = $Body;
	}


    public  function  getNumber(){
        return $this->number;
    }
    public  function  getBody(){
        return $this->body;
    }
    public  function  getStateSms(){
        return $this->state;
    }
    public  function  setStateSms($State){
        $this->state = $State;
    }

    public function sendSmsFromApi(){
        //code API

        $account_sid = 'AC8a4b0a81c6f610f949176be1adb8e5ec';
        $auth_token = 'b57f3cbe54aaaba1a64ad6abcc50fd8e';
        $twilio_number = "+16067140906";

        $twilio = new Client($account_sid, $auth_token);

        $result = $twilio->messages
            ->create(  "+51". $this->number,  //"+51943178688", // to
                [
                    "body" =>  $this->body , //"Con api de respuesta 3",
                    "from" => $twilio_number,
                    "statusCallback" => "http://postb.in/1234abcd"
                ]
            );

        //from doc: https://www.twilio.com/docs/sms/tutorials/how-to-confirm-delivery-php
        if($result->status == 'queued' or $result->status == 'accepted' ) {
            return $this->state = true;
        }else {
            return $this->state = false;
        }





    }


}