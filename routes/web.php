<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\CommandesController;
use Illuminate\Support\Facades\Route;

Route::get("/", [AccueilController::class,'index']);

Route::get("clients", [ClientsController::class,'index']);

Route::get("produits", [ProduitsController::class,'index']);

Route::get("commandes", [CommandesController::class,'index']);