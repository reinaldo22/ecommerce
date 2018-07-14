<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);


$app->get('/admin', function() use ($app) {

    $page = new Hcode\PageAdmin();
    $page->setTpl("index");

});


$app->get('/', function() {

    $page = new Hcode\Page();
    $page->setTpl("index");
});


$app->run();

?>