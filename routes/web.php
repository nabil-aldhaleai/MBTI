<?php

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

// Route::get( '/answers/results', function () {
//     return view('/answers/results');
// });

Route::get('/answers/results/{answer}', 'AnswersController@calculateMBTI');
// Route::get('/answers/results', 'AnswersController@calculateMBTI');


Route::resource('answers', 'AnswersController');

Route::get('/', function () {
    // return view('welcome');
    return view( '/answers/create');
});
