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


// HOME route
Route::get('/', function () {
    return view('home');
})->name('home');

// ABOUT route
Route::get('/about', function () {
    $data = [
        'title' => 'About me',
        'description' => "Salve a tutti, mi chiamo Stefano, sono un ragazzo di 22 anni appassionato da sempre di informatica e programmazione, se vi va date un occhio al mio github"
    ];
    return view('about', $data);
})->name('about');

// CONTACTS route
Route::get('/contacts', function () {
    $data = [
        'title' => 'Contatti',
        'contacts' => [
            'Email' => 'stefanotescione83@gmail.com',
            'Telefono' => '+39 3349780422',
            'Indirizzo' => 'Via Amendola 88, Caserta 81100'
        ]
    ];
    return view('contacts', $data);
})->name('contacts');