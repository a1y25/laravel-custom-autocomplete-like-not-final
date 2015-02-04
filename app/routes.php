<?php

Route::get('/', function()
{
	return View::make('index');
});


Route::resource('products','ProductController');