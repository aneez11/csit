<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'hello';
});
// Route::get('/first', function () {
//     return 'first route';
// });
Route::get('/about/home/test/one/two/three', function () {
    return 'THis is about page';
})->name('mero.about.page');

Route::get('/user/{id}/details', function ($id) {
    return "user id is $id ";
});
Route::get('/user/{name}/{id}', function ($name, $id) {
    return "The id of $name is $id";
    // return 'The id of ' . $name . ' is ' . $id;
});
Route::get('/first', function () {
    return view('csit');
});

Route::get('/dashboard/test', 'DashboardController@test')->name('dashboard.test');







Route::get('/dashboard/hello', 'DashboardController@hello');
Route::resource('/dashboard', 'DashboardController');


Route::resource('/members', 'MemberController');

Route::resource('/users', 'UserController');
