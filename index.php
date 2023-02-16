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

date_default_timezone_set("Asia/Jakarta");

require __DIR__ . "/vendor/autoload.php";

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$settings = require __DIR__ . "/config/settings.php";
$app = new \Slim\App($settings);

require __DIR__ . "/config/dependencies.php";
require __DIR__ . "/config/handlers.php";
require __DIR__ . "/config/middleware.php";
require __DIR__ . "/config/db.php";

$app->get("/", function ($request, $response, $arguments) {
    print "DNA Banner Service Api!";
});

require __DIR__ . "/routes/banner.php";

$app->run();
