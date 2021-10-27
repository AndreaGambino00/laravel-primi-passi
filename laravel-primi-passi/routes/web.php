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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/nome', function () {
    return view('nome',[
        "fullName" => "Andrea Gambino",
        "adress" => "via Mondini 10",
        "city" => "Ala",
        
    ]);
})-> name("contatto"); 



Route::get('/', function () {
    return view('home' , [
        "name" => "Andrea",
        "surname" => "Gambino",
        "email" => "andreagambino@yahoo.it",

    ]);
})-> name("startPage");

Route::get('/contact_2', function () {
    return view('contact_2' , [
        "name" => "Jhonny",
        "surname" => "Stecchino",
        "email" => "jonny@yahoo.it",

    ]);
})-> name("contatto_2");



