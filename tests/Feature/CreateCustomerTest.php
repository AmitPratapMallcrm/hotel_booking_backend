<?php

namespace Tests\Feature;
use App\Models\Customer;
use App\Models\User;
use Tests\TestCase;

class CreateCustomerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCustomerCanBeCreated()
    {
       
        
            $userData = [
                'name' => 'JohDoe',
                'email' => 'ohnd@example.com',
                'password' => 'password',
                'role_id'=>"1"
            ];
            $user = User::create($userData);
        $customerData = [
            'location' => 'Sahjanwa',
            'phonenumber' => '987654',
            'addharnumber' => '4567890',
            'user_id'=> $user->id
        ];

        $customer = Customer::create($customerData);

       $this->assertInstanceOf(user::class, $user);
       $this->assertInstanceOf(Customer::class, $customer);
        $this->assertDatabaseHas('customers', ['location' => 'Sahjanwa']);
    }
}


