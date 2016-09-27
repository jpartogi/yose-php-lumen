<?php

class ShareTest extends TestCase
{
    /**
     * Source repository link test.
     *
     * @return void
     */
    public function testRepositoryLink()
    {
        echo "\n* ShareTest::testRepositoryLink()";
        $visitor = $this->visit('/');
        $link_uri = $visitor->crawler->selectLink('Repository README Link')->link()->getUri();
        $this->assertEquals($link_uri, 'https://github.com/sriyanto/php-lumen-yose');
    }
}
