<?php

class PrimeFactorsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPrime()
    {
        $this->visit('/primeFactors?number=32')
            ->seeJson(["number"=>32,"decomposition"=>[2,2,2,2,2]]);
    }
}
