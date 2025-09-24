<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("accueil");
});

Route::get("clients", function () {
    return view("clients");
});

Route::get("produits", function () {
    return view("produits");
});

Route::get("commandes", function () {
    return view("commandes");
});