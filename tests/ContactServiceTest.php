<?php

namespace Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use App\Mobile;
use App\Provider;
use App\Services\ContactService;

class ContactServiceTest extends TestCase
{

    //5.When writing the tests you should mock every method from ContactService

    /** @test */
    public function it_returns_object_if_contact_exists()
    {
        $contactService = new ContactService();
        $result = $contactService->findByName('Jordy');

        $this->assertIsObject($result);
    }

    /** @test */
    public function it_returns_true_if_contact_exists()
    {
        $contactService = new ContactService();
        $result = $contactService->validateIfContactExists('Jordy');
        $this->assertSame(true, $result);
    }

    /** @test */
    public function it_returns_false_if_contact_doesnt_exists()
    {
        $contactService = new ContactService();
        $result = $contactService->validateIfContactExists('Mark');
        $this->assertSame(false, $result);
    }

    /** @test */
    public function it_returns_true_if_number_is_valid()
    {
        $contactService = new ContactService();
        $result = $contactService->validateNumber('943178688');
        $this->assertSame(true, $result);
    }

    /** @test */
    public function it_returns_false_if_number_is_not_valid()
    {
        $contactService = new ContactService();
        $result = $contactService->validateNumber('999999');
        $this->assertSame(false, $result);
    }

}
