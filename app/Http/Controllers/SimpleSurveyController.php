<?php

namespace App\Http\Controllers;

use App\SimpleSurvey;
use App\SimpleSurveyResponse;
use Illuminate\Http\Request;

class SimpleSurveyController extends Controller
{
	public function WEBFindSurveys($id)
	{
		$result = SimpleSurvey::find($id);
		return $result;
	}
	
	/////////////////////////////////////////////////////////
	/////////////////////////API/////////////////////////////
	/////////////////////////////////////////////////////////
	
	public function APIIndexSurveys()
	{
		$result = SimpleSurvey::all();
		return $result;
	}
	
	public function APIFindSurveys($id)
	{
		$result = SimpleSurvey::find($id);
		return $result;
	}
	
	public function APICreateSurveys(Request $request)
	{
		SimpleSurvey::create($request->toArray());
		return 'Saved Successfully';
	}
	
	public function APIUpdateSurveys(Request $request)
	{
		$result = SimpleSurvey::find($request->id);
		$result->title = $request->title;
		$result->question = $request->question;
		$result->save();
		return 'Updated Successfully';
	}
	
	public function APIDeleteSurveys(Request $request)
	{
		$deletedRows = SimpleSurveyResponse::where('survey_id', $request->id)->delete();
		
		SimpleSurvey::destroy($request->id);
		
		return $deletedRows;
	}
	
	/////////////////////////////////////////////////////////
	
	public function APIIndexSurveyResponses($id)
	{
		$myResponses = SimpleSurveyResponse::all()->where('survey_id', $id);
		return $myResponses;
	}
	
	public function APICreateSurveyResponses(Request $request)
	{
		SimpleSurveyResponse::create($request->toArray());
		return 'Saved Successfully';
	}
	
	public function APIUpdateSurveyResponses(Request $request)
	{
		$result = SimpleSurveyResponse::find($request->id);
		$result->message = $request->message;
		$result->save();
		return 'Updated Successfully';
	}
	
	public function APIDeleteSurveyResponses(Request $request)
	{
		SimpleSurveyResponse::destroy($request->id);
		return 'Deleted Successfully';
	}
}