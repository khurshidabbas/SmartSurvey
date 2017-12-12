@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <form method="POST" action="{!! route('CreateCustomSurveyResponseForm') !!}">
                {{ csrf_field() }}
                survey_id: <input type="text" id="survey_id" name="survey_id" value="{{$surveyid}}">
                option: <input type="text" id="option" name="option">
                votes: <input type="number" id="votes" name="votes">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection