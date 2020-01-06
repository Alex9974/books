<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function(){
    return "Bonne année !";
});

// Route::get('/books/{id}', function($id){
//     return App\Book::find($id);
// });

Route::get('/front/index', 'FrontController@index');
// Route::get('/front/show/{id}', 'FrontController@showBook')->where([
//     'id' => '[0-9]+']);

Route::get('/front/show/{id}', 'FrontController@show')->where([
    'id' => '[0-9]+']);
