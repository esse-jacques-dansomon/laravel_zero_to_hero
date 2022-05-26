<?php

use App\Http\Controllers\Controller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', function (){
    return \App\Models\Article::with('type')->paginate(10);
});
Route::get('/types', function (){
    return \App\Models\TypeArticle::with('articles')->paginate(10);
});

Route::get('/user', [Controller::class, 'home']);
