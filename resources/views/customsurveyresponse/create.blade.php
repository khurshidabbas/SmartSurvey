@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="panel-title">New Response</h1>
                </div>
                <div class="panel-body">
                    <div align="center">
                        <form class="form" method="POST" action="{!! route('CreateCustomSurveyResponseForm') !!}">
                            {{ csrf_field() }}

                            <input type="hidden" id="survey_id" name="survey_id" value="{{$surveyid}}">

                            <div class="input-group-lg">
                                <h4 class="text-primary">Option</h4>
                                <textarea class="form-control" type="text" id="option" name="option"
                                          rows="10"></textarea>
                                <br>
                            </div>

                            <div class="input-group-lg">
                                <h4 class="text-primary">Votes</h4>
                                <input class="form-control" min="0" type="number" id="votes" name="votes">
                                <br>
                            </div>

                            <div class="input-group-lg">
                                <button class="form-control btn btn-primary" type="submit">Submit Now!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

{{--<form method="POST" action="{!! route('CreateCustomSurveyResponseForm') !!}">--}}
{{--{{ csrf_field() }}--}}
{{--survey_id: <input type="text" id="survey_id" name="survey_id" value="{{$surveyid}}">--}}
{{--option: <input type="text" id="option" name="option">--}}
{{--votes: <input type="number" id="votes" name="votes">--}}
{{--<button type="submit">Submit</button>--}}
{{--</form>--}}