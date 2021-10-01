<?php

use App\Router;
use App\Controller\HomeController;

Router::get('/', [HomeController::class, 'index']
Router::get('about', HomeController::class, 'about'(){
