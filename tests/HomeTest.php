<?php

class HomeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHome()
    {
        echo "\n* HomeTest::testHome()";
        $this->visit('/')
             ->see('Hello Yose');
    }
}
