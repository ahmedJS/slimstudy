<?php

require "vendor/autoload.php";

$config = new Slim\Container(["settings" => [
    "displayErrorDetails" => true
]]);

$app = new Slim\App($config);




$app->run();