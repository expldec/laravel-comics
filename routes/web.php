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

$data = [];

Route::get('/', function () {
    $comic_array = config('comics');
    $data = [
        'comic_array' => $comic_array
    ];
    // dd($comic_array);
    return view('home', $data);
})->name('home');

Route::get('/comic/{id}', function ($id) use ($data) {
    $comics = collect(config('comics'));
    $current_comic = $comics->where('id', $id)->first();

    if (!$current_comic) {
        return abort(404);
    }

    $data = array_merge($data, [
        'comic' => $current_comic
    ]);
    return view('comic-detail', $data);
})->name('comic');