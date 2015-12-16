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

use App\Core\Company\Company;
use App\Core\Common\Address;

Route::get('/', ['as' => 'home', function () {
    return view('app.layout');
}]);

Route::get('/company/list', ['as' => 'company_list', function () {
    return view('app.company.list', ['companies' => Company::all()]);
}]);

Route::get('/company/show/{company}', ['as' => 'company_show', function (Company $c) {
    return view('app.company.show', ['company' => $c]);
}]);

Route::get('/company/create', ['as' => 'company_create', function () {
    $c = new Company();
    $a = new Address();
    $c->address = $a;
    return view('app.company.edit', ['company' => $c]);
}]);

Route::get('/company/edit/{company}', ['as' => 'company_edit', function (Company $c) {
    return view('app.company.edit', ['company' => $c]);
}]);

Route::post('/company/save/{company?}', ['as' => 'company_save', function (Company $c = null) {
    $address = Address::firstOrNew(Input::get('address'));
    $address->save();
    $c->address_id = $address->id;
    $c->fill(Input::all());
    $c->save();
    return Redirect::route('company_edit', [$c->id]);
}]);
