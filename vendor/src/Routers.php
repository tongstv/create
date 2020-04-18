<?php
Route::group(['prefix' => '{{package}}'], function () {
    Route::get('', '{{Name}}\{{Package}}\{{Package}}Controller@index');
    Route::get('/create', '{{Name}}\{{Package}}\{{Package}}Controller@create');
    Route::post('', '{{Name}}\{{Package}}\{{Package}}Controller@store');
    Route::get('/view/{id}', '{{Name}}\{{Package}}\{{Package}}Controller@show');
    Route::get('/edit/{id}', '{{Name}}\{{Package}}\{{Package}}Controller@edit');
    Route::put('/{id}', '{{Name}}\{{Package}}\{{Package}}Controller@update');
    Route::delete('/{id}', '{{Name}}\{{Package}}\{{Package}}Controller@destroy');
    Route::get('/getData', '{{Name}}\{{Package}}\{{Package}}Controller@getData');
    Route::get('/getIndex', '{{Name}}\{{Package}}\{{Package}}Controller@getIndex');
});

