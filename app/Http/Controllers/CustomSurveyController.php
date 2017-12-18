<?php

namespace App\Http\Controllers;

use App\CustomSurvey;
use App\CustomSurveyResponse;
use Barryvdh\DomPDF\Facade as PDF;
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
	
	////////////////////////// Responses //////////////////////////
	
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
	
	////////////////////////// Downloads //////////////////////////
	
	public function DownloadPDF($id)
	{
		$survey = CustomSurvey::find($id);
		$responses = CustomSurveyResponse::all()->where('survey_id', $survey->id);
		
		$data = ['survey' => $survey, 'responses' => $responses];
		
		$pdf = PDF::loadView('downloads.customsurvey.pdf', $data);
		return $pdf->download('Smart - Survey.pdf');
	}
	
	public function DownloadDOCX($id)
	{
		$survey = CustomSurvey::find($id);
		$responses = CustomSurveyResponse::all()->where('survey_id', $survey->id);
		
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
				$response->votes
				. ' Votes',
				array('name' => 'Calibri', 'size' => 20)
			);
			
			$section->addText(
				$response->option,
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
		$survey = CustomSurvey::find($id);
		$responses = CustomSurveyResponse::all()->where('survey_id', $survey->id);
		
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
				$response->votes
				. ' Votes',
				array('name' => 'Calibri', 'size' => 20)
			);
			
			$section->addText(
				$response->option,
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
		$link = env('APP_URL_NEW') . '/invitation/CustomSurvey/' . $survey;
		$data = ['link' => $link];
		return view('customsurvey.invitation', $data);
	}
}