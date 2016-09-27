<?php

class ContactmeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testContact()
    {
        $this->visit('/')
            ->see("id='contact-me-link'");
    }
}
