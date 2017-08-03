<?php


use Illuminate\Database\Eloquent\Model;
use App\Assessment;


class AssessmentTest extends PHPUnit_Framework_TestCase
{
    function testAssessmentName()
    {
        $assessment = Assessment::find(1);

//        $this->assertEquals('2017', $assessment->period());


    }
}