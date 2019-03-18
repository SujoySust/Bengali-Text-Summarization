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

Route::get('/','WelcomeController@index');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('summary/abstract/bengali','HomeController@banglaAbstract');
Route::post('summary/bangla/abstractive','HomeController@banglaAbstractSummary');

Route::get('summary/extractive/bengali','HomeController@banglaExtract');
Route::post('summary/extractive/bengali','HomeController@banglaExtractSummary');

Route::get('summary/abstract/english','HomeController@englishAbstract');
Route::post('summary/abstract/english','HomeController@englishSummary');

Route::get('summary/extractive/english','HomeController@englishExtract');
Route::post('summary/extractive/english','HomeController@englishExtractSummary');

Route::get('thesis','HomeController@thesis');
Route::get('thesis/view/{id}','HomeController@viewThesis');

Route::get('resource','HomeController@resource');
Route::get('resource/view/{id}','HomeController@viewResource');

Route::get('study','HomeController@study');
Route::get('study/view/{id}','HomeController@viewStudy');

Route::get('contract','HomeController@contract');
Route::get('about','HomeController@about');

Route::post('message/send','HomeController@sendMessage');



Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');

  Route::get('manage/student','AdminController@manageStudent');
  Route::get('approve/student/{id}','AdminController@approveStudent');
  Route::get('block/student/{id}','AdminController@blockStudent');
  Route::get('student/delete/{id}','AdminController@deleteStudent');

  Route::get('student/resource','AdminController@studentResource');
  Route::get('/publish/studentResource/{id}','AdminController@publishStudentResource');
  Route::get('/unPublish/studentResource/{id}','AdminController@unPublishStudentResource');
  Route::get('/view/studentResource/{id}','AdminController@viewStudentResource');

  Route::get('study/post/add','AdminController@addStudyPost');
  Route::post('study/post/save','AdminController@saveStudyPost');
  Route::get('study/post/manage','AdminController@manageStudyPost');
  Route::get('study/post/edit/{id}','AdminController@editStudyPost');
    Route::post('study/post/update','AdminController@updateStudyPost');
    Route::get('study/post/delete/{id}','AdminController@deleteStudyPost');

});

Route::group(['prefix' => 'student'], function () {
  Route::get('/login', 'StudentAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'StudentAuth\LoginController@login');
  Route::post('/logout', 'StudentAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'StudentAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'StudentAuth\RegisterController@register');

  Route::post('/password/email', 'StudentAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'StudentAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'StudentAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'StudentAuth\ResetPasswordController@showResetForm');

  Route::get('/thesis/add','StudentController@addThesis');
  Route::post('/thesis/save','StudentController@saveThesis');
  Route::get('/thesis/manage','StudentController@manageThesis');
  Route::get('/thesis/edit/{id}','StudentController@editThesis');
  Route::post('/thesis/update','StudentController@updateThesis');
});
