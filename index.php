<?php
session_set_cookie_params([
  'lifetime' => 86400,
  'path' => '/',
  'domain' => $_SERVER['HTTP_HOST'],
  'secure' => false,
  'httponly' => true,
  'samesite' => 'Lax'
]);

session_start();

require_once('vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once("app_data/libs/controller.php");
require_once("app_data/libs/model.php");
require_once("app_data/libs/view.php");
require_once("app_data/libs/app.php");
require_once("app_data/libs/database.php");

$app = new App();
?>