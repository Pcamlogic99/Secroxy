<?php
require __DIR__ . '/../vendor/autoload.php';

use Proxy\Http\Request;
use Proxy\Http\Response;
use Proxy\Event\FilterEvent;

// Load config na functions zako
require_once(__DIR__ . '/../includes/config.php');
require_once(__DIR__ . '/../includes/functions.php');

// Initialize Proxy app
$app = new Proxy\App();

// Optional: ongeza plugins kwa events unazotaka kubadilisha request au response
$app->getEventDispatcher()->addListener('request.filter', function(FilterEvent $event){
    $request = $event->getRequest();
    // Badilisha request kama unahitaji hapa
});

$app->getEventDispatcher()->addListener('response.filter', function(FilterEvent $event){
    $response = $event->getResponse();
    // Badilisha response kama unahitaji hapa
});

// Run proxy app
$request = Request::createFromGlobals();
$response = $app->run($request);
$response->send();
exit;
