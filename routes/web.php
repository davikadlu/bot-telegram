<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;

Route::get('/user/account', function () {
    return view('welcome');
});


Route::post('/user/account', function (Request $request, ) {
    
    $name = $request->username;
    $email = $request->email;
    $password = $request->password;
    $category = $request->category;

});

// --------- DATABASE USUÁRIO ---------//

Route::post('/user/account', function (Request $request, User $user) {

    User::create([
        "name"=> $request->name,
        "email"=> $request->email,
        "password"=> $request->password,
        'category'=> $request->category,
    ]);
});

Route::get("/home", function() {
    return view("home");
});