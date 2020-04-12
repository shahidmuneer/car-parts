<?php

Route::get('/', 'HomePageController@index');

Route::get('ad-listings', 'HomePageController@adList')->name('adList');
Route::get('ad-listings/{to}', 'HomePageController@adListTo')->name('adListWithTo');
Route::post('ad-listings', 'HomePageController@store')->name('store');


Route::get('request-listings', 'HomePageController@requestList')->name('requestList');
Route::get('request-listings/{to}', 'HomePageController@requestListTo')->name('requestListWithTo');
Route::post('request-listings', 'HomePageController@storeRequest')->name('storeRequest');


Route::get('/navigation/automotive/{to}', 'HomePageController@navigation')->name('navigation');

Route::get('search', 'HomePageController@table')->name('search');
Route::get('categories/{category}', 'HomePageController@category')->name('category');
Route::get('companies/{company}', 'HomePageController@company')->name('company');
Auth::routes(['register' => false]);

Route::group([ 'middleware' => 'auth'], function () {
Route::get("/my-ads","customer\DashboardController@index");
Route::get("/delete-ad/{id}","customer\DashboardController@deleteAd");
Route::get("/update-ad/{id}","customer\DashboardController@updateAdView");
Route::post("/update/ad/{id}","customer\DashboardController@updateAd");

});
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');

    Route::resource('permissions', 'PermissionsController');

    Route::resource('roles', 'RolesController');

    Route::resource('users', 'UsersController');

    Route::resource('cities', 'CitiesController');

    Route::resource('categories', 'CategoriesController');
    Route::resource('makes', 'MakeController');
    Route::resource('models', 'ModelController');
    Route::resource('types', 'TypeController');

    Route::resource('companies', 'CompaniesController');
});
