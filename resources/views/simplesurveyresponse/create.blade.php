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
                        <form class="form" method="POST" action="{!! route('CreateSimpleSurveyResponseForm') !!}">
                            {{ csrf_field() }}

                            <input type="hidden" id="survey_id" name="survey_id" value="{{$surveyid}}">

                            <div class="input-group-lg">
                                <h4 class="text-primary">Response</h4>
                                <textarea class="form-control" type="text" id="message" name="message"
                                          rows="10"></textarea>
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