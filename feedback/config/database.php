<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'kevin');
    define('DB_PASS', '123456');
    define('DB_NAME', 'php_dev');
    
    // create connection to mysql database
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // check connection
    if($conn->connect_error) {
        // The die function will destroy the connection if anything goes wrong
        die('Connection Failed ' . $conn->connect_error);
    } 
    
    echo 'CONNECTED!';