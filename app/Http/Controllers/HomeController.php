<?php

namespace App\Http\Controllers;

use App\CustomSurvey;
use App\SimpleSurvey;
use Auth;
use Illuminate\Http\Request;
use App\Mail\InvitationEmail;
use Mail;

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
//		$simpleSurveys = SimpleSurvey::all();
//		$customSurveys = CustomSurvey::all();

		$simpleSurveys = SimpleSurvey::all()->where('user_id', Auth::id());
		$customSurveys = CustomSurvey::all()->where('user_id', Auth::id());

		$data = ['simpleSurveys' => $simpleSurveys, 'customSurveys' => $customSurveys];

		return view('home', $data);
	}

	public function email(Request $request)
	{
//		return $request->link;
//		Mail::to('khurshidabbas@gmail.com')->send(new InvitationEmail($request->link));
		Mail::to($request->email)->send(new InvitationEmail($request->link));
		return view('invitations.thanks');
	}
}