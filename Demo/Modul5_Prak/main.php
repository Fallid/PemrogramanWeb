<?php
header("Content-Type: application/json; charset=UTF-8");
include"app/Routes/UsersRoute.php";
use app\Routes\UsersRoute;

$method = $_SERVER["REQUEST_METHOD"];
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

$productRoute = new UsersRoute();
$productRoute->handle($method, $path);