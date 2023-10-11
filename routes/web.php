<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $routes = array_keys(Route::getRoutes()->getRoutesByName());

    $permissions = [];

    foreach ($routes as $route) {
        $permissions[] = [
            'name' => $route,
            'guard_name' => 'web'
        ];
    }

    echo '<pre>';
    echo var_export($permissions);
    echo '</pre>';

    return '';
});

Route::get('test', function (\Illuminate\Http\Request $request) {
    dd($request->boolean('paginate', false));
});

Route::get('home', function (\Illuminate\Http\Request $request) {

});
