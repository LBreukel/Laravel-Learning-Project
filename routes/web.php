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

// when first visiting the website, this page will show up
Route::get('/', function () {
    return view('index');
});

//when the URL reads /item, this route will be opened
Route::resource('/item', 'ItemController');

//when the URL reads /cooking, this route will be opened
Route::resource('/cooking', 'CookingController');

Route::get('/cooking/{cooking}/delete', 'CookingController@delete')->name('cooking.delete');

//when the URL reads /alchemy, this route will be opened
Route::resource('/alchemy', 'AlchemyController');

//when the URL reads /gearitem, this route will be opened
Route::resource('/gearitems', 'GearItemController');

Route::get('{gearitem}/delete', 'GearItemController@delete')->name('gearitems.delete');

//when the URL reads /enhancing, this route will be opened
Route::resource('/enhancing', 'EnhancingController');

//when the URL reads /horse, this route will be opened
Route::get('/horse', 'HorseController@index');

//when the URL reads /horseadmin, this route will be opened
Route::get('/horseadmin', 'HorseController@horses');

//when the URL reads /boss, this route will be opened
Route::resource('/boss', 'BossController');

//When the URL reads /account, this route will be opened
Route::resource('/account', 'UserController');

Route::get('/guide', function () {
    return view('guide');
});

//when the URL reads /material, this route will be opened
Route::get('/material/{material}/delete', 'MaterialsController@delete')
    ->name('materials.delete');
Route::resource('/materials', 'MaterialsController');

Route::get('/account/{account}/delete', 'UserController@delete')->name('account.delete');

//Auth stuff
Auth::routes();

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/cooking/{id}/edit', 'CookingController@edit');
    Route::get('/cooking/{id}/update', 'CookingController@update');
    Route::get('/cooking/{id}/delete', 'CookingController@delete');
});

Route::get('/home', 'HomeController@index')->name('home');
