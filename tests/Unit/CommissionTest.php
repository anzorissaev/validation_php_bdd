<?php

namespace Tests\Unit;

use App\Commission;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommissionTest extends TestCase
{
    /**
     * Test du getter Donation
     *
     * @return void
     */
    public function testDonationGetter()
    {
        // Etant donné que la commission est de 10%
        $donation = new Commission(10);

        // Lorsque le site reçoit une donation de 100
        $donation->setDonation(100);

        // Alors la Valeur de la dotation doit être de 100
        $expected = 100;
        $actual = $donation->getDonation();

        $this->assertEquals($expected, $actual);
    }

 
}