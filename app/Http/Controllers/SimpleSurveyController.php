<?php

namespace App\Http\Controllers;

use App\SimpleSurvey;
use App\SimpleSurveyResponse;
use Barryvdh\DomPDF\Facade as PDF;
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
	
	////////////////////////// Responses //////////////////////////
	
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
	
	////////////////////////// Downloads //////////////////////////
	
	public function DownloadPDF($id)
	{
		$survey = SimpleSurvey::find($id);
		$responses = SimpleSurveyResponse::all()->where('survey_id', $survey->id);
		
		$data = ['responses' => $responses, 'survey' => $survey];
		
		$pdf = PDF::loadView('downloads.simplesurvey.pdf', $data);
		return $pdf->download('Smart - Survey.pdf');

//		return redirect(route('FindSimpleSurvey', ['id' => $survey->id]));
	}
	
	public function DownloadDOCX($id)
	{
		$survey = SimpleSurvey::find($id);
		$responses = SimpleSurveyResponse::all()->where('survey_id', $survey->id);
		
		$phpWord = new \PhpOffice\PhpWord\PhpWord();
		$section = $phpWord->addSection();
		$file = 'Smart - Survey.docx';
		header("Content-Description: File Transfer");
		header('Content-Disposition: attachment; filename="' . $file . '"');
		header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
		header('Content-Transfer-Encoding: binary');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Expires: 0');
		
		
		$section->addText(
			'Smart Survey',
			array('name' => 'Calibri', 'size' => 36)
		);
		
		$section->addTextBreak();
		
		$section->addText(
			$survey->title,
			array('name' => 'Calibri', 'size' => 26)
		);
		
		$section->addText(
			$survey->question,
			array('name' => 'Calibri', 'size' => 18)
		);
		
		$section->addTextBreak();
		
		$section->addText(
			'Feedbacks:',
			array('name' => 'Calibri', 'size' => 26)
		);
		
		foreach ($responses as $response) {
			$section->addText(
				$response->message,
				array('name' => 'Calibri', 'size' => 18)
			);
			
			$section->addText(
				'Created: ' . $response->created_at
				. ' --- '
				. 'Updated: ' . $response->updated_at
				,
				array('name' => 'Calibri', 'size' => 12)
			);
			
			$section->addTextBreak();
			$section->addTextBreak();
		}
		
		
		$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		$objWriter->save('php://output');
	}
	
	public function DownloadHTML($id)
	{
		$survey = SimpleSurvey::find($id);
		$responses = SimpleSurveyResponse::all()->where('survey_id', $survey->id);
		
		$phpWord = new \PhpOffice\PhpWord\PhpWord();
		$section = $phpWord->addSection();
		$file = 'Smart - Survey.html';
		header("Content-Description: File Transfer");
		header('Content-Disposition: attachment; filename="' . $file . '"');
		header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
		header('Content-Transfer-Encoding: binary');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Expires: 0');
		
		
		$section->addText(
			'Smart Survey',
			array('name' => 'Calibri', 'size' => 36)
		);
		
		$section->addTextBreak();
		
		$section->addText(
			$survey->title,
			array('name' => 'Calibri', 'size' => 26)
		);
		
		$section->addText(
			$survey->question,
			array('name' => 'Calibri', 'size' => 18)
		);
		
		$section->addTextBreak();
		
		$section->addText(
			'Feedbacks:',
			array('name' => 'Calibri', 'size' => 26)
		);
		
		foreach ($responses as $response) {
			$section->addText(
				$response->message,
				array('name' => 'Calibri', 'size' => 18)
			);
			
			$section->addText(
				'Created: ' . $response->created_at
				. ' --- '
				. 'Updated: ' . $response->updated_at
				,
				array('name' => 'Calibri', 'size' => 12)
			);
			
			$section->addTextBreak();
			$section->addTextBreak();
		}
		
		$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
		$objWriter->save('php://output');
	}
	
	////////////////////////// Invitations //////////////////////////
	
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
