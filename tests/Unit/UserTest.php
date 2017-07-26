<?php

namespace Tests\Unit;

use App\Assessment;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseMigrations;
   /**
    * @test
    */
   public function can_attach_assessments()
   {

       //Arrange
       $assessment = factory(Assessment::class)->create();
       $user = factory(User::class)->create();

       //Action
       $user->assessments()->attach($assessment->id);

       //Assert
       $this->assertEquals(1, $user->assessments->count());
   }
}
