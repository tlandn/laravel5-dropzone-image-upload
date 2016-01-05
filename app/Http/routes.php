<?php

/*
http://tuts.codingo.me/laravel-5-1-and-dropzone-js-auto-image-uploads-with-removal-links/  BEST
  https://github.com/codingo-me/dropzone-laravel-image-upload
*/


Route::get('/', ['as' => 'upload', 'uses' => 'ImageController@getUpload']);
Route::post('upload', ['as' => 'upload-post', 'uses' =>'ImageController@postUpload']);
Route::post('upload/delete', ['as' => 'upload-remove', 'uses' =>'ImageController@deleteUpload']);
