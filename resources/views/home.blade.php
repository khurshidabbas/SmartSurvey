@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">Welcome</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2 class="text-primary">
                        {{Auth::user()->name}},
                        <span style="font-size: 15px" class="text-success">You are logged in!</span>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div align="center">
                        <div class="btn-group">
                            <button style="width: 250px" type="button" class="btn btn-primary btn-lg btn-filter"
                                    data-target="feedback">
                                Feedbacks
                                <span class="badge">{{sizeof($simpleSurveys)}}</span>
                            </button>
                            <button style="width: 250px" type="button" class="btn btn-primary btn-lg btn-filter"
                                    data-target="survey">
                                Surveys
                                <span class="badge">{{sizeof($customSurveys)}}</span>
                            </button>
                        </div>
                    </div>

                    <br>

                    <div class="table-container">
                        <table class="table table-filter">
                            <tbody>

                            <tr data-status="feedback">
                                <td>
                                    <div class="row">
                                        <div align="center">
                                            <button type="button" class="btn btn-success"
                                                    onclick="location.href='{!! route('CreateSimpleSurvey') !!}'">
                                                Create New Feedback!
                                            </button>
                                        </div>

                                        <br>

                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Feedbacks</h3>
                                            </div>
                                            <div class="panel-body">


                                                @foreach($simpleSurveys as $simpleSurvey)
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">

                                                            <a href={!! route('FindSimpleSurvey', ['id' => $simpleSurvey->id]) !!}>

                                                                <h3 class="text-warning">{{$simpleSurvey->title}}</h3>
                                                            </a>

                                                            <div>
                                                                <p>
                                                                    <span class="text-primary">Created:</span> {{$simpleSurvey->created_at}}
                                                                    ---
                                                                    <span class="text-primary">Updated:</span> {{$simpleSurvey->updated_at}}
                                                                </p>
                                                            </div>

                                                            {{--<span class="text-warning">{{$simpleSurvey->id}}</span>--}}
                                                            {{--<span class="text-primary">{{$simpleSurvey->user_id}}</span>--}}
                                                            {{--<span class="text-primary">{{$simpleSurvey->question}}</span>--}}

                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <tr data-status="survey">
                                <td>
                                    <div class="row">
                                        <div align="center">
                                            <button type="button" class="btn btn-success"
                                                    onclick="location.href='{!! route('CreateCustomSurvey') !!}'">
                                                Create New Survey!
                                            </button>
                                        </div>

                                        <br>

                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Surveys</h3>
                                            </div>
                                            <div class="panel-body">
                                                @foreach($customSurveys as $customSurvey)
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">

                                                            <a href={!! route('FindCustomSurvey', ['id' => $customSurvey->id]) !!}>

                                                                <h3 class="text-warning">{{$customSurvey->title}}</h3>

                                                            </a>
                                                            <div>
                                                                <p>
                                                                    <span class="text-primary">Created:</span> {{$customSurvey->created_at}}
                                                                    ---
                                                                    <span class="text-primary">Updated:</span> {{$customSurvey->updated_at}}
                                                                </p>
                                                            </div>

                                                            {{--<span class="text-warning">{{$customSurvey->id}}</span>--}}
                                                            {{--<span class="text-primary">{{$customSurvey->user_id}}</span>--}}
                                                            {{--<span class="text-primary">{{$customSurvey->question}}</span>--}}
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection