<?php

use Illuminate\Support\Facades\Route;


Route::get('/index', function () {return view('index');});

Route::get('/home', function () {return view('home');});

Route::get('/pizzas', function () {return view('pizzas');});

Route::get('/menu', function () { return view('menu');});

