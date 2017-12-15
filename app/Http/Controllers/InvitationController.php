<?php

namespace App\Http\Controllers;

use App\CustomSurveyResponse;
use App\SimpleSurveyResponse;
use Crypt;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
	public function GetSimpleSurveyInvitation($id)
	{
		$surveyid = Crypt::decrypt($id);
		$data = ['surveyid' => $surveyid];
		return view('invitations.simplesurveyresponsecreate', $data);
	}
	
	public function PostSimpleSurveyInvitation(Request $request)
	{
		SimpleSurveyResponse::create($request->toArray());

//		return redirect(route('FindSimpleSurvey', ['id' => $request->survey_id]));
		return view('invitations.thanks');
	}
	
	/////////////////////////////////////////
	
	public function GetCustomSurveyInvitation($id)
	{
		$surveyid = Crypt::decrypt($id);
		
		$options = CustomSurveyResponse::all()->where('survey_id', $surveyid);
		
		$data = ['surveyid' => $surveyid, 'options' => $options];
		return view('invitations.customsurveyresponsecreate', $data);
	}
	
	public function PostCustomSurveyInvitation(Request $request)
	{
		CustomSurveyResponse::where('id', $request->optionid)->increment('votes');
		return view('invitations.thanks');
	}
}