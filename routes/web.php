<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::livewire('/post/create', 'pages::post.create');
// Route::livewire('/post/create', 'post.create');
Route::livewire('/todos', 'todos');

// Route::livewire('/posts/{id}', 'pages::post.show');
Route::livewire('/posts/{post}', 'pages::post.show');
Route::livewire('/customer', 'customer');