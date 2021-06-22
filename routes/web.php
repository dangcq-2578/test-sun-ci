<?php

use Illuminate\Support\Facades\Route;
use \Firebase\JWT\JWT;
use Carbon\Carbon;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return 'Home';
});

Route::get('/abc', function () {
    $privateKey = Storage::disk('local')->get('app.pem');

    $payload = array(
        "iat" => Carbon::now()->addMinutes(1)->timestamp,
        "iss" => 112548,
        "exp" => Carbon::now()->addMinutes(5)->timestamp,
    );

    $jwt = JWT::encode($payload, $privateKey, 'RS256');
    dd($jwt);
    dd($jwt);
    dd($jwt);
});