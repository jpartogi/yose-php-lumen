<?php

class PortofolioPingTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPortofolio()
    {
        $this->visit('/')
             ->click('Portofolio Ping')
             ->seePageIs('/ping')
             ->seeJson([
                'alive' => true,
             ]);

    }
}
