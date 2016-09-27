<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 9/27/2016
 * Time: 11:16 AM
 */

namespace Symfony\Component\DomCrawler\Crawler;


class MinesweeperBoardTest extends \PHPUnit_Framework_TestCase
{
    public function minesweeperBoardTest() {
        $this->visit('/minesweeper')
            ->click('Minesweeper')
            ->seePageIs('/minesweeper')
            ->assertTitle('Minesweeper')
            ->identifier('cell-1x1')
            ->identifier('cell-8x8');

    }
}
