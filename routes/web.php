<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Benvenuto';
    $link1 = 'http://127.0.0.1:8000';
    $link2 = 'http://127.0.0.1:8000/contatti';
    $link3 = 'http://127.0.0.1:8000/chi-sono';
    return view('welcome', compact('title', 'link1', 'link2', 'link3'));
});
Route::get('/contatti', function () {
    $title = 'Contatti';
    return view('contatti', ['title' => 'Contatti']);
});

Route::get('/chi-sono', function () {
    $title = 'Chi Sono';
    $description = 'Una breve descrizione su di me...';
    return view('chi-sono', compact('title', 'description'));
});
