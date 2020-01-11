<?php

Auth::routes(['register' => false]);

/*
 *
 * */

Route::middleware(['auth'])->group(function () {

    /*Admin Routes*/
    Route::middleware(['role:admin'])->group(function () {

        /*Switch Branches*/
        Route::get('/switcher/{id}', 'Administration\Settings\CompanyController@switcher')->name('switcher');
        /*Company Routes*/
        Route::get('/company', 'Administration\Settings\CompanyController@index')->name('company.index');
        Route::patch('/company/{company}', 'Administration\Settings\CompanyController@update')->name('company.update');

        /*branches Routes*/
        Route::get('/branches', 'Administration\Settings\BranchController@index')->name('branch.index');
        Route::post('/branch', 'Administration\Settings\BranchController@store')->name('branch.store');
        Route::get('/branch/{branch}/edit', 'Administration\Settings\BranchController@edit')->name('branch.edit');
        Route::patch('/branch/{branch}', 'Administration\Settings\BranchController@update')->name('branch.update');
        Route::delete('/branch/{branch}', 'Administration\Settings\BranchController@destroy')->name('branch.destroy');

        /*branches Routes*/
        Route::get('/warehouses', 'Administration\Settings\WarehouseController@index')->name('warehouse.index');
        Route::post('/warehouse', 'Administration\Settings\WarehouseController@store')->name('warehouse.store');
        Route::get('/warehouse/{warehouse}/edit', 'Administration\Settings\WarehouseController@edit')->name('warehouse.edit');
        Route::patch('/warehouse/{warehouse}', 'Administration\Settings\WarehouseController@update')->name('warehouse.update');
        Route::delete('/warehouse/{warehouse}', 'Administration\Settings\WarehouseController@destroy')->name('warehouse.destroy');

        /*User Routes*/
        Route::get('/users', 'Administration\UserController@index')->name('user.index');
        Route::get('/user', 'Administration\UserController@create')->name('user.create');
        Route::post('/user', 'Administration\UserController@store')->name('user.store');
        Route::get('/user/{user}/edit', 'Administration\UserController@edit')->name('user.edit');
        Route::patch('/user/{user}', 'Administration\UserController@update')->name('user.update');
        Route::delete('/user/{user}', 'Administration\UserController@destroy')->name('user.destroy');



        Route::get('/', function () {
            return view('app-dashboard');
        });

        Route::get('/demo', function () {
            return view('demo');
        });

         /*Dashboard*/
         Route::get('/home', 'HomeController@index')->name('home');
         Route::redirect('/', '/home');
    });
});
