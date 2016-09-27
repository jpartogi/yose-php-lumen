<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 9/27/2016
 * Time: 10:53 AM
 */
class pingChallengeTest extends PHPUnit_Framework_TestCase
{
    public function pingChallengeTest() {
        $visitor = $this->visit('/ping');
        $crawler = $visitor->crawler;
        $link = $crawler->selectLink('Ping Challenge')->link();
        $uri = $link->getUri();
        $this->assertEquals($uri, 'https://github.com/sriyanto/php-lumen-yose/ping-challenge.html');
    }
}

