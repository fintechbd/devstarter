<?php

use Illuminate\Http\Request;
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

    return redirect()->route('request-docs.index');

    $routes = array_keys(Route::getRoutes()->getRoutesByName());
//
//    $permissions = [];
//
//    foreach ($routes as $route) {
//        $permissions[] = [
//            'name' => $route,
//            'guard_name' => 'web'
//        ];
//    }
//
//    echo '<pre>';
//    echo var_export($permissions);
//    echo '</pre>';
//
//    return '';
});

Route::get('test', function (Request $request) {
    dd($request->boolean('paginate', false));
});

Route::get('home', function (Request $request) {
    return view('welcome');
});

Route::get('password/reset/{token}', function (Request $request) {

})->name('password.reset');
