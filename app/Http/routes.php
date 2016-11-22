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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'AngularController@servePublicPage');
    Route::get('/admin', 'AngularController@serveAdminPage');
    Route::get('/events', 'AngularController@eventListPage');
    Route::get('/contact_us', 'AngularController@contactUsPage');
    Route::get('/event', 'AngularController@eventPage');
    Route::get('/about_us', 'AngularController@aboutUsPage');
    Route::get('/scholarships', 'AngularController@scholarshipPage');
    Route::get('/scholarship', 'AngularController@scholarSinglePage');

    Route::get('/unsupported-browser', 'AngularController@unsupported');
    Route::get('user/verify/{verificationCode}', ['uses' => 'Auth\AuthController@verifyUserEmail']);
    Route::get('auth/{provider}', ['uses' => 'Auth\AuthController@redirectToProvider']);
    Route::get('auth/{provider}/callback', ['uses' => 'Auth\AuthController@handleProviderCallback']);
    Route::get('/api/authenticate/user', 'Auth\AuthController@getAuthenticatedUser');

    //playground
    //Route::get('/playground', 'AngularController@playGround');
});

$api->group(['middleware' => ['api']], function ($api) {
    $api->controller('auth', 'Auth\AuthController');

    // Password Reset Routes...
    $api->post('auth/password/email', 'Auth\PasswordResetController@sendResetLinkEmail');
    $api->get('auth/password/verify', 'Auth\PasswordResetController@verify');
    $api->post('auth/password/reset', 'Auth\PasswordResetController@reset');

    //public
    $api->post('public/events', 'EventController@getPublicEventList');
    $api->get('public/eventtypes', 'EventTypeController@getPublicEventTypeList');
    $api->get('public/categories', 'CategoryController@getPublicCategoryList');

    $api->get('public/provinces', 'ProvinceController@getIndex');
    $api->get('public/cities', 'CityController@getIndex');

    $api->get('public/event/{eventId}', 'EventController@getPublicEvent');

    $api->get('public/scholarships', 'VacancyController@getPublicVacancyList');
});

$api->group(['middleware' => ['api', 'api.auth']], function ($api) {
    $api->get('users/me', 'UserController@getMe');
    $api->put('users/me', 'UserController@putMe');
});

$api->group(['middleware' => ['api', 'api.auth', 'role:admin.super|admin.user']], function ($api) {
    $api->controller('users', 'UserController');
    $api->controller('eventtype', 'EventTypeController');
    $api->controller('event', 'EventController');
    $api->controller('category', 'CategoryController');
    $api->controller('organizer', 'OrganizerController');
    $api->controller('vacancy', 'VacancyController');
    $api->controller('vacancytype', 'VacancyTypeController');
    $api->controller('scholarship', 'ScholarshipController');
});
