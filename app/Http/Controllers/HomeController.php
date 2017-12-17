<?php

namespace App\Http\Controllers;

use App\CustomSurvey;
use App\SimpleSurvey;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$simpleSurveys = SimpleSurvey::all();
		$customSurveys = CustomSurvey::all();

//		$simpleSurveys = SimpleSurvey::all()->where('user_id', Auth::id());
//		$customSurveys = CustomSurvey::all()->where('user_id', Auth::id());
		
		$data = ['simpleSurveys' => $simpleSurveys, 'customSurveys' => $customSurveys];
		
		return view('home', $data);
	}
}