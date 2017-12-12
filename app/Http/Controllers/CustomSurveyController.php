<?php

namespace App\Http\Controllers;

use App\CustomSurvey;
use App\CustomSurveyResponse;
use Crypt;
use Illuminate\Http\Request;

class CustomSurveyController extends Controller
{
	//Add Auth Middleware to this Controller
	public function WebFindSurveys($id)
	{
		$survey = CustomSurvey::find($id);
		$responses = CustomSurveyResponse::all()->where('survey_id', $survey->id);
		
		$data = ['survey' => $survey, 'responses' => $responses];
		
		return view('customsurvey.index', $data);
	}
	
	public function WebCreateSurveys()
	{
		return view('customsurvey.create');
	}
	
	public function WebCreateSurveysForm(Request $request)
	{
		$result = CustomSurvey::create($request->toArray());
		return redirect()->route('FindCustomSurvey', ['id' => $result->id]);
//		return redirect()->route('home');
	}
	
	public function WebUpdateSurveys($id)
	{
		$survey = CustomSurvey::find($id);
		$data = ['survey' => $survey];
		return view('customsurvey.update', $data);
	}
	
	public function WebUpdateSurveysForm(Request $request)
	{
		$result = CustomSurvey::find($request->id);
		$result->user_id = $request->user_id;
		$result->title = $request->title;
		$result->question = $request->question;
		$result->save();
		return redirect()->route('FindCustomSurvey', ['id' => $request->id]);
	}
	
	public function WebDeleteSurveys($id)
	{
		$deletedRows = CustomSurveyResponse::where('survey_id', $id)->delete();
		
		CustomSurvey::destroy($id);
		
		return redirect(route('home'));
	}
	
	/////////////////////////////////////////////////////////
	
	public function WebCreateSurveyResponses($id)
	{
		$data = ['surveyid' => $id];
		return view('customsurveyresponse.create', $data);
	}
	
	public function WebCreateSurveyResponsesForm(Request $request)
	{
		CustomSurveyResponse::create($request->toArray());
		return redirect(route('FindCustomSurvey', ['id' => $request->survey_id]));
	}
	
	/////////////////////////////////////////////////////////
	
	public function CreateInvitation($id)
	{
//		$randomString = Str::random(3);
//		$link = '/invitation/' . $randomString . '/SimpleSurvey/' . $id;
		$survey = Crypt::encrypt($id);
		$link = env('APP_URL_NEW') . '/invitation/CustomSurvey/' . $survey;
		$data = ['link' => $link];
		return view('customsurvey.invitation', $data);
	}
}