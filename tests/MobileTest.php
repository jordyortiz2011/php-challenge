<?php

namespace Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use App\Mobile;
use App\Provider;

class MobileTest extends TestCase
{

    //1.Fix any errors and add the necessary to make the test work and commit it
	/** @test */
	public function it_returns_null_when_name_empty()
	{
        $provider = new Provider();

		$mobile = new Mobile($provider);

		$this->assertNull($mobile->makeCallByName(''));
	}

    //2.Add a test for the method makeCallByName passing a valid contact, mock up any hard dependency
    //  and add the right assertions
    /** @test */
    public function it_returns_true_if_call_is_successful()
    {
        $provider = new Provider();

        $mobile = new Mobile($provider);
        $call = $mobile->makeCallByName('Ricardo');  //Only make call if contact exist in the DataBase

        $this->assertSame(true,$call->getStateCall());
    }

    //4.Add your own logic to send a SMS given a number and the body,
    //  the method should validate the number using the validateNumber method from ContactService
    //  and using the provider property’s methods
    /** @test */
    public function it_returns_true_if_sendSMS_is_successful()
    {
        $provider = new Provider();

        $mobile = new Mobile($provider);
        $state = $mobile->sendSmsByNumber('943178688' , 'This is a test by Jordy.');

        $this->assertSame(true,$state);
    }

}
