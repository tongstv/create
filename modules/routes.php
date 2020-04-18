<?php
## START ROUTER Modules/  {{name}} ##
Route::group(['prefix' => '{{name}}',
    'namespace' => '\App\Modules\{{Name}}',
], function ($router) {
    $router->get('/', '{{Name}}Controller@index');
    $router->get('/create', '{{Name}}Controller@create');
    $router->post('/', '{{Name}}Controller@store');
    $router->get('/{id}/view', '{{Name}}Controller@view');
    $router->get('/{id}/edit', '{{Name}}Controller@edit');
    $router->put('/{id}', '{{Name}}Controller@update');
    $router->patch('/{id}', '{{Name}}Controller@update');
    $router->delete('/{id}', '{{Name}}Controller@destroy');
    $router->get('/getData', '{{Name}Controller@getData');
    $router->get('/getIndex', '{{Name}}Controller@getIndex');
    $router->get('/export', '{{Name}}Controller@export');
});

## END ROUTER Modules/ {{name}} ##
