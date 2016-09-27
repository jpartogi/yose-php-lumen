<?php

class PingTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPing()
    {
        echo "\n* PingTest::testPing()";
        $this->visit('/ping')
             ->seeJson([
                'alive' => true,
             ]);
    }
}
