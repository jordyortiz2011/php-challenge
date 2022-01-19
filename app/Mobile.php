<?php

namespace App;

use App\Interfaces\CarrierInterface;
use App\Services\ContactService;


class Mobile
{

	protected $provider;

	
	function __construct(CarrierInterface $provider)
	{
		$this->provider = $provider;
	}


	public function makeCallByName($name = '')
	{
		if( empty($name) ) return;

		$contact = ContactService::findByName($name);

		$this->provider->dialContact($contact);

		return $this->provider->makeCall();
	}

    public function sendSmsByNumber($number = '', $body = '')
    {
        if( empty($number) || empty($body)  ) return;

        $validNumber = ContactService::validateNumber($number);

        if( !$validNumber ) return;

        $this->provider->createSms(new Contact('', $number), $body);
        return $this->provider->sendSms();


    }


}
