<?php

Route::get('products/{id}', 'ProductsController@getProduct');
Route::post('products', 'ProductsController@addProduct');
Route::get('assets/{id}', 'AssetsController@getAsset');
Route::post('assets', 'AssetsController@addAsset');
Route::post('upload-assets', 'AssetUploadsController@uploadFile');
