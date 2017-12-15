<?php

namespace App\Http\Controllers;

use App\SimpleSurvey;
use App\SimpleSurveyResponse;
use Crypt;
use Illuminate\Http\Request;


class SimpleSurveyController extends Controller
{
	//Add Auth Middleware to this Controller
	public function WebFindSurveys($id)
	{
		$survey = SimpleSurvey::find($id);
		$responses = SimpleSurveyResponse::all()->where('survey_id', $survey->id);
		
		$data = ['survey' => $survey, 'responses' => $responses];
		
		return view('simplesurvey.index', $data);
	}
	
	public function WebCreateSurveys()
	{
		return view('simplesurvey.create');
	}
	
	public function WebCreateSurveysForm(Request $request)
	{
		$result = SimpleSurvey::create($request->toArray());
		return redirect()->route('FindSimpleSurvey', ['id' => $result->id]);
//		return redirect()->route('home');
	}
	
	public function WebUpdateSurveys($id)
	{
		$survey = SimpleSurvey::find($id);
		$data = ['survey' => $survey];
		return view('simplesurvey.update', $data);
	}
	
	public function WebUpdateSurveysForm(Request $request)
	{
		$result = SimpleSurvey::find($request->id);
		$result->user_id = $request->user_id;
		$result->title = $request->title;
		$result->question = $request->question;
		$result->save();
		return redirect()->route('FindSimpleSurvey', ['id' => $request->id]);
	}
	
	public function WebDeleteSurveys($id)
	{
		$deletedRows = SimpleSurveyResponse::where('survey_id', $id)->delete();
		
		SimpleSurvey::destroy($id);
		
		return redirect(route('home'));
	}
	
	/////////////////////////////////////////////////////////
	
	public function WebCreateSurveyResponses($id)
	{
		$data = ['surveyid' => $id];
		return view('simplesurveyresponse.create', $data);
	}
	
	public function WebCreateSurveyResponsesForm(Request $request)
	{
		SimpleSurveyResponse::create($request->toArray());
		return redirect(route('FindSimpleSurvey', ['id' => $request->survey_id]));
	}
	
	/////////////////////////////////////////////////////////
	
	public function CreateInvitation($id)
	{
//		$randomString = Str::random(3);
//		$link = '/invitation/' . $randomString . '/SimpleSurvey/' . $id;
		$survey = Crypt::encrypt($id);
		$link = env('APP_URL_NEW') . '/invitation/SimpleSurvey/' . $survey;
		$data = ['link' => $link];
		return view('simplesurvey.invitation', $data);
	}
}
