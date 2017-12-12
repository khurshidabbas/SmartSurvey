<?php


use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
});

///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////

Route::get('simplesurveys', 'SimpleSurveyAPIController@APIIndexSurveys');
Route::get('simplesurveys/{id}', 'SimpleSurveyAPIController@APIFindSurveys');
Route::post('simplesurveys/create', 'SimpleSurveyAPIController@APICreateSurveys');
Route::put('simplesurveys/update', 'SimpleSurveyAPIController@APIUpdateSurveys');
Route::delete('simplesurveys/delete', 'SimpleSurveyAPIController@APIDeleteSurveys');

Route::get('simplesurveys/responses/{id}', 'SimpleSurveyAPIController@APIIndexSurveyResponses');
Route::post('simplesurveys/responses/create', 'SimpleSurveyAPIController@APICreateSurveyResponses');
Route::put('simplesurveys/responses/update', 'SimpleSurveyAPIController@APIUpdateSurveyResponses');
Route::delete('simplesurveys/responses/delete', 'SimpleSurveyAPIController@APIDeleteSurveyResponses');

///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////

Route::get('customsurveys', 'CustomSurveyAPIController@APIIndexSurveys');
Route::get('customsurveys/{id}', 'CustomSurveyAPIController@APIFindSurveys');
Route::post('customsurveys/create', 'CustomSurveyAPIController@APICreateSurveys');
Route::put('customsurveys/update', 'CustomSurveyAPIController@APIUpdateSurveys');
Route::delete('customsurveys/delete', 'CustomSurveyAPIController@APIDeleteSurveys');

Route::get('customsurveys/options/{id}', 'CustomSurveyAPIController@APIIndexSurveyOptions');
Route::post('customsurveys/options/create', 'CustomSurveyAPIController@APICreateSurveyOptions');
Route::put('customsurveys/options/vote', 'CustomSurveyAPIController@APIVoteSurveyOptions');
Route::delete('customsurveys/options/delete', 'CustomSurveyAPIController@APIDeleteSurveyOptions');
