<?php
require "../vendor/autoload.php";

use Proxy\Http\Request;
use Proxy\Http\Response;
use Proxy\Plugin\AbstractPlugin;
use Proxy\Event\FilterEvent;
use Proxy\Config;

// Load config
require_once("../includes/config.php");
require_once("../includes/functions.php");

// Initialize application
$app = new Proxy\App();

// Add plugins if needed
$app->getEventDispatcher()->addListener('request.filter', function(FilterEvent $event){
    $request = $event->getRequest();
    // You can modify the request here
});

$app->getEventDispatcher()->addListener('response.filter', function(FilterEvent $event){
    $response = $event->getResponse();
    // You can modify the response here
});

// Run the app
$request = Request::createFromGlobals();
$response = $app->run($request);
$response->send();
exit
