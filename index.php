<?php

require_once "Routing/Router.php";
require_once "Controllers/IndexController.php";
require_once "Controllers/UploadController.php";

$router = new Router();

$router->get('/', IndexController::class, 'Index');
$router->get('/index', IndexController::class, 'Index');
$router->post('/upload', UploadController::class, 'Upload');

$router->dispatch();

