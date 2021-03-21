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
    return view('welcome');
});

//Login
Route::get('/login', 'AuthController@getLogin')->name('login');
Route::post('/login', 'AuthController@postLogin')->name('login.post');

//SignUp
Route::get('/signup', 'AuthController@getSignup')->name('signup');
Route::post('/signup/action', 'AuthController@postSignup')->name('signup.post');

// dashboard
Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    //Home Management
    Route::get('/management', 'AuthController@getHome')->name('management.get');

    //Ajax
    Route::get('/ajax/company/{cpn_id}', 'AjaxController@getCompany')->name('ajax.company.get');
    Route::get('/ajax/branch/{cpn_id}/{br_id}', 'AjaxController@getBranch')->name('ajax.branch.get');
    Route::get('/ajax/get-pm', 'ProjectController@getAjaxGetPM')->name('AjaxGetPM.get');

    //Company ManagementRoute::group(['prefix'=>'/company'],function() {
    Route::get('/company', 'CompanyController@getCompany')->name('company.get');
    Route::get('/company/search', 'CompanyController@getSearchCompany')->name('searchCompany.get');

    Route::get('/company_register', 'CompanyController@getRegister')->name('company_register.get');
    Route::post('/company_register/action', 'CompanyController@postRegister')->name('company_register.post');

    Route::get('/company_detail/{id}', 'CompanyController@getCpnDetail')->name('company_detail.get');
    Route::post('/company_detail/update', 'CompanyController@postUpdate')->name('company_detail.post');

    //Branch Management
    Route::get('/branch', 'BranchController@getHome')->name('branch.get');
    Route::get('/branch/search', 'BranchController@getSearch')->name('br_search.get');

    Route::get('/branch_register', 'BranchController@getRegister')->name('branch_register.get');
    Route::post('/branch_register', 'BranchController@postRegister')->name('branch_register.post');

    Route::get('/branch_detail/{id}', 'BranchController@getBrDetail')->name('branch_detail.get');
    Route::post('/branch_detail/update', 'BranchController@postUpdate')->name('branch_detail.post');

    //Division Management
    Route::get('/division', 'DivisionController@getHome')->name('division.get');
    Route::get('/division/search', 'DivisionController@getSearch')->name('division_search.get');

    Route::get('/division_register', 'DivisionController@getRegister')->name('division_register.get');
    Route::post('/division_register', 'DivisionController@postRegister')->name('division_register.post');

    Route::get('/division_detail/{id}', 'DivisionController@getDvsDetail')->name('division_detail.get');
    Route::post('/division_detail/update', 'DivisionController@postUpdate')->name('division_detail.post');

    //Project Management
    Route::get('/project', 'ProjectController@getHome')->name('project.get');
    Route::get('/project/search', 'ProjectController@getSearch')->name('project_search.get');

    Route::get('/project_register', 'ProjectController@getRegister')->name('project_register.get');
    Route::post('/project_register', 'ProjectController@postRegister')->name('project_register.post');

    Route::get('/project_detail/{code}', 'ProjectController@getDetail')->name('project_detail.get');
    Route::post('/project_detail/update', 'ProjectController@postUpdate')->name('project_detail.post');


//Profile Management

    Route::get('/profile', 'ProfileController@getProcess')->name('profile.get');
    Route::get('/profile_information/', 'ProfileController@getInformation')->name('information.get');
    Route::post('/profile_information/', 'ProfileController@postInformation')->name('information.post');

    Route::get('/profile_skill', 'ProfileController@getSkill')->name('skill.get');
    Route::get('/profile_skill/update', 'ProfileController@getSkillUpdate')->name('skill_update.get');


    Route::get('/profile_certificate', 'ProfileController@getCertificate')->name('certificate.get');
    Route::get('/profile_certificate/update', 'ProfileController@getCertificateUpdate')->name('certificate_update.get');

});