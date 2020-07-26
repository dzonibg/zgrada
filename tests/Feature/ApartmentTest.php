<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApartmentTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testPaymentsPage() {
        $response = $this->get('/payments');

        $response->assertStatus(200);
        $response->assertSee("Dodaj uplatu");
        $response->assertDontSee("Greska");
    }

    public function testCreatePayment() {
        $response = $this->get('/payments/create');

        $response->assertStatus(200);
    }

    public function testCreatedPayment() {
        $response = $this->post('/payments/store');
        $response->assertStatus(405); //TODO WRITE A TEST!
    }

    public function testBadPaymentStore() {
        $response = $this->get('/payments');
        $response->assertStatus(200);
    }
}
