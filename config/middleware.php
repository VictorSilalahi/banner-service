<?php

/*
 * This file is part of the Slim API skeleton package
 *
 * Copyright (c) 2016-2017 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Project home:
 *   https://github.com/tuupola/slim-api-skeleton
 *
 */
use App\Token;

use Slim\Middleware\JwtAuthentication;
use Slim\Middleware\HttpBasicAuthentication;
use Tuupola\Middleware\CorsMiddleware;
use Gofabian\Negotiation\NegotiationMiddleware;

$container = $app->getContainer();

$container["token"] = function ($container) {
    return new Token;
};

$container["JwtAuthentication"] = function ($container) {
    return new JwtAuthentication([
        "path" => "/",
        "passthrough" => [
            "/banners" 
        ],
        "secret" => getenv("JWT_SECRET"),
        "secure" => false,
        "logger" => $container["logger"],
        "error" => function ($request, $response, $arguments) {
            $data["status"] = "error";
            $data["message"] = $arguments["message"];
            return $response
                ->withHeader("Content-Type", "application/json")
                ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
        },
        "callback" => function ($request, $response, $arguments) use ($container) {
            $container["token"]->hydrate($arguments["decoded"]);
        }
    ]);
};

$container["Cors"] = function ($container) {
    return new CorsMiddleware([
        "logger" => $container["logger"],
        "origin" => ["*"],
        "methods" => ["GET", "POST", "PUT", "PATCH", "DELETE"],
        "headers.allow" => ["Authorization", "If-Match", "If-Unmodified-Since", "Content-Type", "Access-Control-Allow-Origin"],
        "headers.expose" => ["Authorization", "Etag"],
        "credentials" => true,
        "cache" => 60,
        "error" => function ($request, $response, $arguments) {
            $data["status"] = "error";
            $data["message"] = $arguments["message"];
            return $response
                ->withHeader("Content-Type", "application/json")
                ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
        }
    ]);
};

$container["Negotiation"] = function ($container) {
    return new NegotiationMiddleware([
        "accept" => ["application/json"]
    ]);
};

// $app->add("JwtAuthentication");
$app->add("Cors");
$app->add("Negotiation");
// $app->add("Db");
