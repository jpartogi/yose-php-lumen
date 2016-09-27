<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 9/27/2016
 * Time: 11:40 AM
 */
class stringGuardTest extends PHPUnit_Framework_TestCase
{
    public function stringGuardTest()
    {
        $this->visit('/primeFactors?number=hello')
            ->seeJson(["number"=>"hello","error"=>"not a number"]);
    }
}
