<?php

use App\Router;
use App\Controller\HomeController;
use App\Controller\PostController;


Router::get('/', [HomeController::class, 'index']);
Router::post('/', [HomeController::class, 'index']);
Router::get('/about', [PostController::class, 'about']);
Router::get('/posts', [HomeController::class, 'posts']);


