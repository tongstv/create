## START ROUTER  {{name}} ##
Route::group(['prefix' => '{{name}}'], function () {
    Route::get('/', '{{Name}}Controller@index');
    Route::get('/create', '{{Name}}Controller@create');
    Route::post('/', '{{Name}}Controller@store');
    Route::get('/{id}/show', '{{Name}}Controller@show');
    Route::get('/{id}/edit', '{{Name}}Controller@edit');
    Route::put('/{id}', '{{Name}}Controller@update');
    Route::patch('/{id}', '{{Name}}Controller@update');
    Route::delete('/{id}', '{{Name}}Controller@destroy');
    Route::get('/getData', '{{Name}}Controller@getData');
    Route::get('/getIndex', '{{Name}}Controller@getIndex');
});
## END ROUTER {{name}} ##
