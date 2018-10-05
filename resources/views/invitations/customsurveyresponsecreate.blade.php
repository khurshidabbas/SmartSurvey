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
                    <div align="left">

                        <form method="POST" action="{!! route('PostCustomSurveyInvitation') !!}">
                            {{ csrf_field() }}
                            @foreach($options as $option)
                                <input type="radio" name="optionid" id="optionid" value="{{$option->id}}">
                                {{$option->option}}
                                <br>
                                <br>
                            @endforeach
                            <button class="btn btn-primary form-control" type="submit">Submit Now!</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection