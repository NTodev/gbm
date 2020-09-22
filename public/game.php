<?php

include '../vendor/autoload.php';

$get = $_GET;

if($get && isset($get['question'])){
    $controller = new App\Controller\ApiController();
    echo $controller->getQuestion();
}

if($get && isset($get['jokers'])){
    $controller = new App\Controller\ApiController();
    echo $controller->getJokers();
}