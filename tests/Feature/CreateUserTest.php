<?php

namespace Tests\Feature;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class CreateUser extends TestCase
{
    use DatabaseTransactions;
   /**
     * Test that a user can be created
     *
     * @return void
     */
    public function testUserCanBeCreated()
    {
        $userData = [
            'name' => 'John Doe',
            'email' => 'jhnde@example.com',
            'password' => 'password',
            'role_id'=>"1"
        ];

        $user = User::create($userData);

        $this->assertInstanceOf(User::class, $user);
        $this->assertDatabaseHas('users', ['email' => 'jhnde@example.com']);
    }
    /**
     * Test that a user can be deleted
     *
     * @return void
     */

    // public function testUserCanBeDeleted()
    // {
    //     $user = User::factory()->create();

    //     $this->assertTrue($user->delete());
    //     $this->assertDatabaseMissing('users', ['id' => $user->id]);
    // }
    

   
   
}
