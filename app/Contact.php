<?php

namespace App;

use App\Services\ContactService;

class Contact
{
    protected $name;
    protected $number;
	
	function __construct($name, $number)
	{
        $this->name = $name;
        $this->number = $number;
	}

    public function getName() {
        return $this->name;
    }

    public function getNumber() {
        return $this->number;
    }

    public function checkIfContactExist(Contact $contact)
    {

        $contacExists = ContactService::validateIfContactExists($contact->getName());

        return $contacExists; //TRUE: contact exists  | FALSE: Contacts doesn't exists
    }
}