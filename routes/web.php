<?php

use App\Http\Controllers\Guest\PageController;
use App\Models\Train;
use Illuminate\Support\Facades\Route;

Route::get("/", [PageController::class, "index"]);
