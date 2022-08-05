<?php

use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\SapiEmitter;
use Zend\Diactoros\ServerRequestFactory;

//chdir(dirname(__DIR__));
//require "src/Framework/Http/Request.php";
require "vendor/autoload.php";

### init

//$request = RequestFactory::fromGlobals();
$request = ServerRequestFactory::fromGlobals();

### action

$name = $request->getQueryParams()['name'] ?? 'Guest';

$response = (new HtmlResponse('Hello, ' . $name . '!'))
    ->withHeader('X-Developer', 'RenMS');

### sending

$emitter = new SapiEmitter();
$emitter->emit($response);

//echo "hello, {$name} \n";