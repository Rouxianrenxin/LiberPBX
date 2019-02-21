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


/*
 * laravel default routes. We no longer need them.
 */
/*Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');*/

/*User Front end (customers)*/
Route::get('/app/{any}', 'SpaController@user')->where('any', '.*');

/*Admin Access*/
Route::get('/app/admin/{any}', 'SpaController@admin')->where('any', '.*');

