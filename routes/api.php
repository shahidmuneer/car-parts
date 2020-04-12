<?php

Route::get("/categories/fetch","Api\V1\Admin\CategoryApiController@fetch");
Route::get("/models/fetch","Api\V1\Admin\ModelApiController@fetch");
Route::get("/types/fetch","Api\V1\Admin\TypeApiController@fetch");
Route::get("/makes/fetch","Api\V1\Admin\MakeApiController@fetch");
Route::get("/parts/fetch","Api\V1\Admin\PartsApiController@fetch");

Route::group(['prefix' => 'v1', 'as' => 'admin.', 'namespace' => 'Api\V1\Admin'], function () {
    Route::apiResource('permissions', 'PermissionsApiController');

    Route::apiResource('roles', 'RolesApiController');

    Route::apiResource('users', 'UsersApiController');

    Route::apiResource('categories', 'CategoryApiController');

    Route::apiResource('cities', 'CityApiController');

    Route::apiResource('companies', 'CompanyApiController');
});
