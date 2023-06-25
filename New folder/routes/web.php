<?php

use App\Http\Controllers\ArticleController;
use App\Post;
use Illuminate\Foundation\Providers\ArtisanServiceProvider;
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


Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get("posts/{id}","PostsController@index");

Route::get("/articles",function(){
    $articles =App\Article::take(2)->get();
    return view("list-articles",["article"=>$articles]);
});

Route::get("/articles","ArticleController@index");

Route::get("/articles/create","ArticleController@create");

Route::post("/articles/store","ArticleController@store");

Route::get("/articles/{article}","ArticleController@show");
Route::get("/articles/{article}/edit","ArticleController@edit");
 Route::put("/articles/{article}","ArticleController@update");
 Route::delete("/articles/{article}","ArticleController@destroy");
