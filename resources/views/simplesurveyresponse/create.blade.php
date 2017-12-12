@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <form method="POST" action="{!! route('CreateSimpleSurveyResponseForm') !!}">
                {{ csrf_field() }}
                survey_id: <input type="text" id="survey_id" name="survey_id" value="{{$surveyid}}">
                message: <input type="text" id="message" name="message">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection