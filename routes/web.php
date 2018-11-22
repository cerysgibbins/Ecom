<?php

Route::get('products/{id}', 'ProductsController@getProduct');
Route::post('products', 'ProductsController@addProduct');
