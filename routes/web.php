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
	return view('mywelcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

///////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/home/simplesurvey/create', 'SimpleSurveyController@WebCreateSurveys')
	->name('CreateSimpleSurvey');
Route::post('/home/simplesurvey/create', 'SimpleSurveyController@WebCreateSurveysForm')
	->name('CreateSimpleSurveyForm');

Route::get('/home/simplesurvey/update/{id}', 'SimpleSurveyController@WebUpdateSurveys')
	->name('UpdateSimpleSurvey');
Route::post('/home/simplesurvey/update', 'SimpleSurveyController@WebUpdateSurveysForm')
	->name('UpdateSimpleSurveyForm');

Route::get('/home/simplesurvey/delete/{id}', 'SimpleSurveyController@WebDeleteSurveys')
	->name('DeleteSimpleSurvey');
Route::get('/home/simplesurvey/{id}', 'SimpleSurveyController@WebFindSurveys')
	->name('FindSimpleSurvey');
////////////////////////////////// Responses //////////////////////////////////
Route::get('/home/simplesurvey/{id}/respnoses/create', 'SimpleSurveyController@WebCreateSurveyResponses')
	->name('CreateSimpleSurveyResponse');
Route::post('/home/simplesurvey/respnoses/create', 'SimpleSurveyController@WebCreateSurveyResponsesForm')
	->name('CreateSimpleSurveyResponseForm');
////////////////////////////////// Downloads //////////////////////////////////
Route::get('/home/simplesurvey/{id}/download/pdf', 'SimpleSurveyController@DownloadPDF')
	->name('DownloadPDF');
Route::get('/home/simplesurvey/{id}/download/docx', 'SimpleSurveyController@DownloadDOCX')
	->name('DownloadDOCX');
Route::get('/home/simplesurvey/{id}/download/html', 'SimpleSurveyController@DownloadHTML')
	->name('DownloadHTML');


///////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/home/customsurvey/create', 'CustomSurveyController@WebCreateSurveys')
	->name('CreateCustomSurvey');
Route::post('/home/customsurvey/create', 'CustomSurveyController@WebCreateSurveysForm')
	->name('CreateCustomSurveyForm');

Route::get('/home/customsurvey/update/{id}', 'CustomSurveyController@WebUpdateSurveys')
	->name('UpdateCustomSurvey');
Route::post('/home/customsurvey/update', 'CustomSurveyController@WebUpdateSurveysForm')
	->name('UpdateCustomSurveyForm');

Route::get('/home/customsurvey/delete/{id}', 'CustomSurveyController@WebDeleteSurveys')
	->name('DeleteCustomSurvey');
Route::get('/home/customsurvey/{id}', 'CustomSurveyController@WebFindSurveys')
	->name('FindCustomSurvey');
////////////////////////////////// Responses //////////////////////////////////
Route::get('/home/customsurvey/{id}/respnoses/create', 'CustomSurveyController@WebCreateSurveyResponses')
	->name('CreateCustomSurveyResponse');
Route::post('/home/customsurvey/respnoses/create', 'CustomSurveyController@WebCreateSurveyResponsesForm')
	->name('CreateCustomSurveyResponseForm');

///////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/home/simplesurvey/invite/{id}', 'SimpleSurveyController@CreateInvitation')
	->name('CreateSimpleSurveyInvitation');

Route::get('/invitation/SimpleSurvey/{id}', 'InvitationController@GetSimpleSurveyInvitation')
	->name('GetSimpleSurveyInvitation');
Route::post('/invitation/SimpleSurvey/post', 'InvitationController@PostSimpleSurveyInvitation')
	->name('PostSimpleSurveyInvitation');

//////////////////////////////////

Route::get('/home/customsurvey/invite/{id}', 'CustomSurveyController@CreateInvitation')
	->name('CreateCustomSurveyInvitation');

Route::get('/invitation/CustomSurvey/{id}', 'InvitationController@GetCustomSurveyInvitation')
	->name('GetCustomSurveyInvitation');
Route::post('/invitation/CustomSurvey/post', 'InvitationController@PostCustomSurveyInvitation')
	->name('PostCustomSurveyInvitation');
