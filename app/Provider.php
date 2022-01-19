<?php

namespace App;
use App\Call;
use App\Sms;
use App\Interfaces\CarrierInterface;
use phpDocumentor\Reflection\Types\Boolean;

class Provider implements CarrierInterface {

    protected $contact;
    protected $smsByNumber; //it can be send by contact or number

    public function dialContact(Contact $contact)
    {
        // TODO: Implement dialContact() method.
        $this->contact = $contact;
    }

    public function makeCall(): Call
    {
        // TODO: Implement makeCall() method.
        return new Call($this->contact);
    }

    public function createSms (Contact $contact, $body = '') {
        $this->contact = $contact;
        $this->smsByNumber = new Sms($contact->getNumber(), $body);
    }
    public function sendSms(): Bool {
        // TODO: Implement sendSms() method.
        return $this->smsByNumber->sendSmsFromApi();
    }



}