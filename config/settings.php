<?php 

return [
    "settings" => [
        "displayErrorDetails" => true,
        "db" => [
            'host' => getenv("DB_HOST"),
            'user' => getenv("DB_USER"),
            'port' => getenv("DB_PORT"),
            'pass' => getenv("DB_PASSWORD"),
            'dbname' => getenv("DB_NAME"),
            'driver' => getenv("DB_DRIVER")
        ]
    ]
];