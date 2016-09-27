<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', "HomeController@welcome");

$app->get('/ping', "PingController@ping");

$app->get('/primeFactors',"PrimeFactorsController@prime");

$app->get('/contactme',"ContactController@contactme");

$app->get('/astroport',"AstroportController@astroport");

$app->get('/share/link', "ShareController@link");

$app->get('/minesweeper', "MinesweeperController@board");
