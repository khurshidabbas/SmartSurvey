@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="panel-title">New Feedback</h1>
                </div>
                <div class="panel-body">
                    <div align="center">
                        <form class="form" method="POST" action="{!! route('CreateSimpleSurveyForm') !!}">
                            {{ csrf_field() }}

                            <input class="form-control" type="hidden" id="user_id" name="user_id"
                                   value="{{Auth::id()}}">

                            <div class="input-group-lg">
                                <h4 class="text-primary">Question</h4>
                                <input class="form-control" placeholder="Title" type="text" id="title" name="title">
                                <br>
                            </div>

                            <div class="input-group-lg">
                                <textarea class="form-control" placeholder="Briefly describe your question..."
                                       type="text" id="question" name="question" rows="10"></textarea>
                                <br>
                            </div>

                            <br>

                            <button class="form-control btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection