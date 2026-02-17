<?php
// Mostrar todos os erros
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

require 'vendor/autoload.php';
require 'App/Settings/config.php';
require 'App/Router/router.php';
