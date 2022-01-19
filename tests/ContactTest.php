<?php

namespace Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use App\Mobile;
use App\Provider;
use App\Contact;

class ContactTest extends TestCase
{


    //3.Add the necessary code in the production code to check when the contact is not found
    //  and add another test to test that case
    /** @test */
    public function it_returns_true_if_contact_exists()
    {
        $contact = new Contact('Jordy', '');
        $contactExists = $contact->checkIfContactExist($contact);
        $this->assertSame(true,$contactExists);
    }

    /** @test */
    public function it_returns_false_if_contact_doesnt_exists()
    {
        $contact = new Contact('Charles', '');
        $contactExists = $contact->checkIfContactExist($contact);
        $this->assertSame(false,$contactExists);
    }

}
