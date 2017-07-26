<?php

namespace Tests\Feature;

use App\User;
use App\Assessment;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomepageTest extends TestCase
{

    use DatabaseMigrations;
    /**
     * @test
     */

    public function can_user_see_name()
    {
        //Arrange
        $user = factory(User::class)->create();
        $assessment = factory(Assessment::class)->create();
        $user->assessments()->attach($assessment->id);
        $assessments = 

        //Action
        $response = $this->actingAs($user)->get("/dashboard");


        //Assertion
        $response->assertStatus(200);
        $response->assertSee($user->name);
        $response->assertSee($assessment->text);



    }




}
