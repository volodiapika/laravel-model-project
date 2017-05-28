<?php
/**
 * Application routes
 *
 * @package Routes
 */
Route::pattern('albumId', '\d+');
Route::pattern('photoId', '\d+');
Route::get('/', ['as' => 'home.index', 'uses' => 'HomeController@index']);
Route::get('photo/lists/{albumId}', ['as' => 'photo.lists', 'uses' => 'PhotoController@lists']);
Route::get('photo/show/{photoId}', ['as' => 'photo.show', 'uses' => 'PhotoController@show']);
Route::get('photo/remove/{albumId}', ['as' => 'photo.remove', 'uses' => 'PhotoController@remove']);
Route::get('photo/removephoto/{photoId}', ['as' => 'photo.removephoto', 'uses' => 'PhotoController@removephoto']);
Route::get('photo/add', ['as' => 'photo.add', 'uses' => 'PhotoController@add']);
Route::get('photo/addurl', ['as' => 'photo.addurl', 'uses' => 'PhotoController@addurl']);
