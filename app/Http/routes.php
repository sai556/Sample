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

Route::get('/', 'EmployeeController@index');

Route::post('/savepersonaldetails', 'EmployeeController@SavePersonalDetails');
Route::get('/addeduform/{id}', 'EmployeeController@EduAddForm');
Route::post('/saveedudetails/{id}', 'EmployeeController@SaveEduDetails');
Route::get('/edueditform/{id}', 'EmployeeController@editEduForm');
Route::get('/deleteedudetails/{id}/{eid}', 'EmployeeController@deleteEduDetails');
Route::get('/addexpform/{id}', 'EmployeeController@ExpAddForm');
Route::post('/saveexpdetails/{id}', 'EmployeeController@SaveExpDetails');
Route::get('/expeditform/{id}', 'EmployeeController@editExpForm');
Route::get('/deleteexpdetails/{id}/{eid}', 'EmployeeController@deleteExpDetails');
Route::get('/addfamilyform/{id}', 'EmployeeController@FamilyAddForm');
Route::post('/savefamilydetails/{id}', 'EmployeeController@SaveFamilyDetails');
Route::get('/familyeditform/{id}', 'EmployeeController@editFamilyForm');
Route::get('/deletefamilydetails/{id}/{eid}', 'EmployeeController@deleteFamilyDetails');
Route::get('/addemp', 'EmployeeController@AddEmployee');
Route::get('/viewdetails/{id}', 'EmployeeController@ViewDetails');
Route::post('/updatepersonaldetails','EmployeeController@UpdatePersonalDetails');
