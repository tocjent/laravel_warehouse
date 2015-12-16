<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('app.layout');
});

Route::get('/company/list', function () {

    return view('app.company.list', [
        'companies' => App\Core\Company\Company::all()
    ]);
});

Route::get('/company/create', function () {
    return view('company_create');
});

Route::get('/company/edit', function () {
    return view('company_edit');
});
