<?php

use Symfony\Component\DomCrawler\Crawler;

class ShareTest extends TestCase
{
    /**
     * Source repository link test.
     *
     * @return void
     */
    public function testRepositoryLink()
    {
        $visitor = $this->visit('/');
        $crawler = $visitor->crawler;
        $link = $crawler->selectLink('Repository README Link')->link();
        $uri = $link->getUri();
        $this->assertEquals($uri, 'https://github.com/anggisusanto/php-lumen-yose/share-link.html');
    }
}