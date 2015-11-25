<?php

error_reporting( E_ALL | E_STRICT );
ini_set( 'display_errors', 'On' );

use Dez\Config\Config;

include_once '../vendor/autoload.php';

$config     = new Dez\Config\Adapter\NativeArray('./_config.php');
$configJson = new Dez\Config\Adapter\Json('./_config.json');

die(var_dump(
    Config::factory('./_config.ini')
        ->merge($configJson)->toObject()
));