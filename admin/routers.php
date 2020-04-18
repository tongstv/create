## START ROUTER admin/  {{name}} ##
Route::group(['prefix' => 'admin/{{name}}'], function () {
    Route::get('/', 'Admin\{{Name}}Controller@index');
    Route::get('/create', 'Admin\{{Name}}Controller@create');
    Route::post('/', 'Admin\{{Name}}Controller@store');
    Route::get('/{id}/view', 'Admin\{{Name}}Controller@view');
    Route::get('/{id}/edit', 'Admin\{{Name}}Controller@edit');
    Route::put('/{id}', 'Admin\{{Name}}Controller@update');
    Route::patch('/{id}', 'Admin\{{Name}}Controller@update');
    Route::delete('/{id}', 'Admin\{{Name}}Controller@destroy');
    Route::get('/getData', 'Admin\{{Name}}Controller@getData');
    Route::get('/getIndex', 'Admin\{{Name}}Controller@getIndex');
    Route::get('/export', 'Admin\{{Name}}Controller@export');
});
## END ROUTER admin/ {{name}} ##
