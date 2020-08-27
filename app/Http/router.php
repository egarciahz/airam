<?php

use Core\Http\Route;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\RequestInterface;

Route::addRoute("GET", "/", \App\Client\Test::class);
Route::addRoute("GET", "/api", function (RequestInterface $r) {
    $r = new JsonResponse(["hello" => "world"]);
    return $r;
});
