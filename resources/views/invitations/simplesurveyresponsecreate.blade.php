@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="panel-title">{{$survey->title}}</h1>
                </div>
                <div class="panel-body">
                    <h4 class="text-primary">Title</h4>
                    <h5>{{$survey->title}}</h5>

                    <br>

                    <h4 class="text-primary">Description</h4>
                    <p>{{$survey->question}}</p>

                    <div>
                        <p>
                            <span class="text-primary">Created:</span> {{$survey->created_at}}
                            ---
                            <span class="text-primary">Updated:</span> {{$survey->updated_at}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="panel-title">New Response</h1>
                </div>
                <div class="panel-body">
                    <div align="center">

                        <form method="POST" action="{!! route('PostSimpleSurveyInvitation') !!}">
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