<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::match(['post', 'get'], '/login', function() {
    return view('login');
});

Route::get('/users', function(){
    $users = [
        ["name" => "sadib", "skill" => "laravel", "id" => 1],
        ["name" => "Tahu", "skill" => "js", "id" => 2],
    ];
    return view('home.index', ["greeting"=>"hello", "users"=> $users]);
});

Route::get('/users/{id}', function($id){
    return view('home.show', ["id"=> $id]);
});
