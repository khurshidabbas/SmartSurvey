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

Route::get('simplesurveys', 'SimpleSurveyController@APIIndexSurveys');
Route::get('simplesurveys/{id}', 'SimpleSurveyController@APIFindSurveys');
Route::post('simplesurveys/create', 'SimpleSurveyController@APICreateSurveys');
Route::put('simplesurveys/update', 'SimpleSurveyController@APIUpdateSurveys');
Route::delete('simplesurveys/delete', 'SimpleSurveyController@APIDeleteSurveys');

Route::get('simplesurveys/responses/{id}', 'SimpleSurveyController@APIIndexSurveyResponses');
Route::post('simplesurveys/responses/create', 'SimpleSurveyController@APICreateSurveyResponses');
Route::put('simplesurveys/responses/update', 'SimpleSurveyController@APIUpdateSurveyResponses');
Route::delete('simplesurveys/responses/delete', 'SimpleSurveyController@APIDeleteSurveyResponses');

///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////

Route::get('customsurveys', 'CustomSurveyController@APIIndexSurveys');
Route::get('customsurveys/{id}', 'CustomSurveyController@APIFindSurveys');
Route::post('customsurveys/create', 'CustomSurveyController@APICreateSurveys');
Route::put('customsurveys/update', 'CustomSurveyController@APIUpdateSurveys');
Route::delete('customsurveys/delete', 'CustomSurveyController@APIDeleteSurveys');

Route::get('customsurveys/options/{id}', 'CustomSurveyController@APIIndexSurveyOptions');
Route::post('customsurveys/options/create', 'CustomSurveyController@APICreateSurveyOptions');
Route::put('customsurveys/options/vote', 'CustomSurveyController@APIVoteSurveyOptions');
Route::delete('customsurveys/options/delete', 'CustomSurveyController@APIDeleteSurveyOptions');