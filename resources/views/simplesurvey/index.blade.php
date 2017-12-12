@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <h1>id::: {{$survey->id}}</h1>
            <h1>user_id::: {{$survey->user_id}}</h1>
            <h1>title::: {{$survey->title}}</h1>
            <h1>question::: {{$survey->question}}</h1>
            <h1>created_at::: {{$survey->created_at}}</h1>
            <h1>updated_at::: {{$survey->updated_at}}</h1>

        </div>

        <div class="row">
            <button type="button"
                    onclick="location.href='{!! route('UpdateSimpleSurvey', ['id'=>$survey->id]) !!}'">
                UPDATE
            </button>

            <button type="button"
                    onclick="location.href='{!! route('DeleteSimpleSurvey', ['id'=>$survey->id]) !!}'">
                DELETE
            </button>

            <button type="button"
                    onclick="location.href='{!! route('CreateSimpleSurveyResponse', ['id'=>$survey->id]) !!}'">
                CREATE RESPONSE
            </button>

            <button type="button"
                    onclick="location.href='{!! route('CreateSimpleSurveyInvitation', ['id'=>$survey->id]) !!}'">
                INVITE USERS
            </button>
        </div>

        @foreach($responses as $response)
            <h3>{{$response->id}}</h3>
            <h3>{{$response->survey_id}}</h3>
            <h3>{{$response->message}}</h3>
            <h3>{{$response->created_at}}</h3>
            <h3>{{$response->updated_at}}</h3>
            <hr>
            <hr>
            <hr>
        @endforeach
    </div>
@endsection