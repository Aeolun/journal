<?php

include_once 'config.php';

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="Journal"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'You are not authorized to access this page';
    exit;
} else {
    if ($user != $_SERVER['PHP_AUTH_USER'] or $password != $_SERVER['PHP_AUTH_PW']) {
        header('WWW-Authenticate: Basic realm="Journal"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'You are not authorized to access this page';
        exit;
    }
}