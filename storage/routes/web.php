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

Route::get('/', 'HomeController@welcome')->name('welcome');

Auth::routes();
// Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/services', 'ServicesController@index')->name('services');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('portfolio/{id}', function ($id) {
    return 'portfolio '.$id;
})->where('id', '[0-9]+');
Route::get('/certification', 'CertificationController@index')->name('certification');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/terms-and-conditions', 'TermsAndConditionsController@index')->name('terms-and-conditions');
Route::get('/privacy-and-policy', 'PrivacyAndPolicyController@index')->name('privacy-and-policy');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'is_admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::any('users/search', [ 'as' => 'users.search', 'uses' => 'UsersController@search']);
    Route::delete('users/mass-destroy', [ 'as' => 'users.mass_destroy', 'uses' => 'UsersController@massDestroy']);
    Route::resource('users', 'UsersController');

    Route::any('certifications/search', [ 'as' => 'certifications.search', 'uses' => 'certificationsController@search']);
    Route::delete('certifications/mass-destroy', [ 'as' => 'certifications.mass_destroy', 'uses' => 'CertificationsController@massDestroy']);
    Route::resource('certifications', 'CertificationsController');

    Route::any('portfolios/search', [ 'as' => 'portfolios.search', 'uses' => 'PortfoliosController@search']);
    Route::delete('portfolios/mass-destroy', [ 'as' => 'portfolios.mass_destroy', 'uses' => 'PortfoliosController@massDestroy']);
    Route::resource('portfolios', 'PortfoliosController');
});
