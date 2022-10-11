<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\EventController;

// ABOUT
Route::get("/about", [EventController::class, "about"]);

// CONTACT
Route::get("/contact", [EventController::class, "contact"]);

// CREATE EVENTS
Route::get("/events/create", [EventController::class, "create"]);
Route::post("/events/publish", [EventController::class, "store"]);

// LOOP
Route::get("/conditions", [EventController::class, "conditions"]);

// PHP
Route::get("/php", [EventController::class, "php"]);

// PRODUCT
Route::get("/product/{id?}", [EventController::class, "product"]);

// PRODUCTS
Route::get("/products", [EventController::class, "products"]);

// HOME
Route::get("/", [EventController::class, "index"]);
