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
    return view('pages.homepage');
});

Route::get('/contact', function(){
	return view('pages.contact');
});

Route::get('sanderson', function(){
	return view('pages.sanderson');

});

Route::get('clarksville', function(){
	return view('pages.clarksville');
});

Route::get('/specs', function (){
	return view('pages.specs');
});

Route::get('pdf/{pdf}', function($pdf){
	return response()->download($pdf);
});

Route::get('/loading-chart', function(){
	return view('pages.loadingChart');
});

Route::get('/block-pricing', function(){
	return view('pages.blockPricing');
});