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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Hello', function (){
   echo "Hello there!";
});

//Route::get('/series', function (){
//
//    $series = [
//       'Arcane',
//       'Lost',
//       'Loky'
//   ];
//
//   $html = "<ul>";
//   foreach ($series as $serie){
//       $html .= "<li>$serie</li>";
//   }
//   $html .= "</ul>";
//
//   return $html;
//});

Route::get('/series', 'SeriesController@index');

