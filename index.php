<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Core\Core;
use App\Http\Route;

Core::dispatch(Route::getRoutes());
