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



        /*ISP Routes*/
        Route::get('/isps', 'Isp\IspController@index')->name('isp.index');
        Route::get('/isp', 'Isp\IspController@create')->name('isp.create');
        Route::post('/isp', 'Isp\IspController@store')->name('isp.store');
        Route::get('/isp/{isp}/edit', 'Isp\IspController@edit')->name('isp.edit');
        Route::patch('/isp/{isp}', 'Isp\IspController@update')->name('isp.update');
        Route::delete('/isp/{isp}', 'Isp\IspController@destroy')->name('isp.destroy');


        /*ISP Routes*/
        Route::get('/packages', 'Isp\PackageController@index')->name('package.index');
        Route::get('/package', 'Isp\PackageController@create')->name('package.create');
        Route::post('/package', 'Isp\PackageController@store')->name('package.store');
        Route::get('/package/{package}/edit', 'Isp\PackageController@edit')->name('package.edit');
        Route::patch('/package/{package}', 'Isp\PackageController@update')->name('package.update');
        Route::delete('/package/{package}', 'Isp\PackageController@destroy')->name('package.destroy');


        /*ISP Routes*/
        Route::get('/isp/users', 'Isp\IspUserController@index')->name('isp.user.index');
        Route::get('/isp/user', 'Isp\IspUserController@create')->name('isp.user.create');
        Route::post('/isp/user', 'Isp\IspUserController@store')->name('isp.user.store');
        Route::get('/isp/user/{ispUser}/edit', 'Isp\IspUserController@edit')->name('isp.user.edit');
        Route::patch('/isp/user/{ispUser}', 'Isp\IspUserController@update')->name('isp.user.update');
        Route::delete('/isp/user/{ispUser}', 'Isp\IspUserController@destroy')->name('isp.user.destroy');
    });
});
