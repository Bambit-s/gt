<?php

use App\Http\Controllers\Catalog;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});
// Route::get('/catalog', function () {
//     return view('catalog');
// });
Route::any('/catalog', [Catalog::class, 'catalog']);


Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/montage', function () {
    return view('montage');
});
Route::get('/delivery', function () {
    return view('delivery');
});
Route::get('/comments', function () {
    return view('comments');
});
