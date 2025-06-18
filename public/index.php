<?php
require __DIR__ . '/../vendor/autoload.php';

use Proxy\Http\Request;
use Proxy\Http\Response;
use Proxy\Event\FilterEvent;
use Proxy\Config;

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';

$app = new Proxy\App();

$app->getEventDispatcher()->addListener('request.filter', function(FilterEvent $event){
    $request = $event->getRequest();
});

$app->getEventDispatcher()->addListener('response.filter', function(FilterEvent $event){
    $response = $event->getResponse();
});

$request = Request::createFromGlobals();
$response = $app->run($request);
$response->send();
exit;
