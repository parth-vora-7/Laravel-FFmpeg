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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('test', function() {
	$audio_file = 'audio/e.mp3';
	
	$media = FFMpeg::open($audio_file)
	->export()
	->inFormat(new \FFMpeg\Format\Audio\Mp3)
	->save('audio/mp3/' . $audio_file); 
	
	//dd($media->getDurationInSeconds() . ' ' . $media->getDurationInMiliseconds());
});
