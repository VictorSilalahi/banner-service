<?php 
function getDB() {
    $conn = NULL;
    try {
        $conn = pg_connect("host=".getenv("DB_HOST")." port=".getenv("DB_PORT")." dbname=".getenv("DB_NAME")." user=".getenv("DB_USER")." password=".getenv("DB_PASSWORD"));
    } catch(Exception $e) {
        echo $e->getMessage();
    }
    return $conn;
};