<?php

Route::name('product.')
  ->group(function(){
    Route::get('/', 'ProductController@index')->name('index');
    Route::get('/product/{id}', 'ProductController@show')->name('show');
  });

Route::name('line_item.')
  ->group(function(){
    Route::post('/lineitem/create','LineItemController@create')->name('create');
  });