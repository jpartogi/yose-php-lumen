<?php

class AstroportTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAstroport()
    {
        $filterId = $this->visit('/astroport')->crawler
            ->filterXPath("//body/div/[@id = 'astroport-name']")->text();
    }
}
