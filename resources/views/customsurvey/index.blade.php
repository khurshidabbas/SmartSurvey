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

                    <div class="row">
                        <div align="center">
                            <button type="button" class="btn btn-primary"
                                    onclick="location.href='{!! route('CreateCustomSurveyResponse', ['id'=>$survey->id]) !!}'">
                                Create Option Now!
                            </button>

                            <button type="button" class="btn btn-primary"
                                    onclick="location.href='{!! route('UpdateCustomSurvey', ['id'=>$survey->id]) !!}'">
                                Update
                            </button>

                            <button type="button" class="btn btn-primary"
                                    onclick="location.href='{!! route('CreateCustomSurveyInvitation', ['id'=>$survey->id]) !!}'">
                                Invitations
                            </button>

                            <button type="button" class="btn btn-danger"
                                    onclick="location.href='{!! route('DeleteCustomSurvey', ['id'=>$survey->id]) !!}'">
                                Delete
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="row">
            <h3 class="text-primary">Responses</h3>

            @foreach($responses as $response)

                <div class="panel panel-primary">
                    <div class="panel-body">

                        <h2>{{$response->votes}} Votes</h2>
                        <p>{{$response->option}}</p>
                        <div>
                            <p>
                                <span class="text-primary">Created:</span> {{$response->created_at}}
                                ---
                                <span class="text-primary">Updated:</span> {{$response->updated_at}}
                            </p>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

    </div>
@endsection



{{--<h1>id::: {{$survey->id}}</h1>--}}
{{--<h1>user_id::: {{$survey->user_id}}</h1>--}}
{{--<h1>title::: {{$survey->title}}</h1>--}}
{{--<h1>question::: {{$survey->question}}</h1>--}}
{{--<h1>created_at::: {{$survey->created_at}}</h1>--}}
{{--<h1>updated_at::: {{$survey->updated_at}}</h1>--}}

{{--@foreach($responses as $response)--}}
{{--<h3>{{$response->id}}</h3>--}}
{{--<h3>{{$response->survey_id}}</h3>--}}
{{--<h3>{{$response->option}}</h3>--}}
{{--<h3>{{$response->votes}}</h3>--}}
{{--<h3>{{$response->created_at}}</h3>--}}
{{--<h3>{{$response->updated_at}}</h3>--}}
{{--@endforeach--}}

{{--<div class="row">--}}
{{--<button type="button"--}}
{{--onclick="location.href='{!! route('UpdateCustomSurvey', ['id'=>$survey->id]) !!}'">--}}
{{--UPDATE--}}
{{--</button>--}}

{{--<button type="button"--}}
{{--onclick="location.href='{!! route('DeleteCustomSurvey', ['id'=>$survey->id]) !!}'">--}}
{{--DELETE--}}
{{--</button>--}}

{{--<button type="button"--}}
{{--onclick="location.href='{!! route('CreateCustomSurveyResponse', ['id'=>$survey->id]) !!}'">--}}
{{--CREATE RESPONSE--}}
{{--</button>--}}

{{--<button type="button"--}}
{{--onclick="location.href='{!! route('CreateCustomSurveyInvitation', ['id'=>$survey->id]) !!}'">--}}
{{--INVITE USERS--}}
{{--</button>--}}
{{--</div>--}}