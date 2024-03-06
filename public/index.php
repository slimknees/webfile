<?php

// Include the autoloader to load Laravel's dependencies
require_once __DIR__.'/vendor/autoload.php';

use Illuminate\Support\Facades\Route;

// Define routes for your application
Route::get('/', function () {
    return view('index');
});

// Other routes for file management, authentication, etc. can be defined here

// Run the application
$app = require_once __DIR__.'/bootstrap/app.php';
$app->run();
