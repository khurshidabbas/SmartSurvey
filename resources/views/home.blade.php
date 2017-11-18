@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($simpleSurveys as $simpleSurvey)
                <a href={!! route('FindSimpleSurvey', ['id' => $simpleSurvey->id]) !!}>
                    <span class="text-warning">{{$simpleSurvey->id}}</span>
                    <span class="text-primary">{{$simpleSurvey->user_id}}</span>
                    <span class="text-warning">{{$simpleSurvey->title}}</span>
                    <span class="text-primary">{{$simpleSurvey->question}}</span>
                    <span class="text-warning">{{$simpleSurvey->created_at}}</span>
                    <span class="text-primary">{{$simpleSurvey->updated_at}}</span>
                </a>
                <br><br>
            @endforeach
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            @foreach($customSurveys as $customSurvey)
                <p style="font-size: 8px">
                    <span style="font-size: 20px">{{$customSurvey->id}}</span>
                    <span class="text-primary">{{$customSurvey->user_id}}</span>
                    <span class="text-warning">{{$customSurvey->title}}</span>
                    <span class="text-primary">{{$customSurvey->question}}</span>
                    <span class="text-warning">{{$customSurvey->created_at}}</span>
                    <span class="text-primary">{{$customSurvey->updated_at}}</span>
                </p>
            @endforeach
        </div>

    </div>
@endsection
