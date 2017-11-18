<?php

namespace App\Http\Controllers;

use App\CustomSurvey;
use App\CustomSurveyResponse;
use Illuminate\Http\Request;

class CustomSurveyController extends Controller
{
	public function APIIndexSurveys()
	{
		$result = CustomSurvey::all();
		return $result;
	}
	
	public function APIFindSurveys($id)
	{
		$result = CustomSurvey::find($id);
		return $result;
	}
	
	public function APICreateSurveys(Request $request)
	{
		CustomSurvey::create($request->toArray());
		return 'Saved Successfully';
	}
	
	public function APIUpdateSurveys(Request $request)
	{
		$result = CustomSurvey::find($request->id);
		$result->title = $request->title;
		$result->question = $request->question;
		$result->save();
		return 'Updated Successfully';
	}
	
	public function APIDeleteSurveys(Request $request)
	{
		$deletedRows = CustomSurveyResponse::where('survey_id', $request->id)->delete();
		
		CustomSurvey::destroy($request->id);
		
		return $deletedRows;
	}
	
	/////////////////////////////////////////////////////////
	/////////////////////////////////////////////////////////
	/////////////////////////////////////////////////////////
	
	public function APIIndexSurveyOptions($id)
	{
		$result = CustomSurveyResponse::all()->where('survey_id', $id);
		return $result;
	}
	
	public function APICreateSurveyOptions(Request $request)
	{
		CustomSurveyResponse::create($request->toArray());
		return 'Saved Successfully';
	}
	
	public function APIDeleteSurveyOptions(Request $request)
	{
		CustomSurveyResponse::destroy($request->id);
		return 'Deleted Successfully';
	}
	
	public function APIVoteSurveyOptions(Request $request)
	{
		CustomSurveyResponse::where('id', $request->id)->increment('votes');
		return 'Voted Successfully';
	}
}