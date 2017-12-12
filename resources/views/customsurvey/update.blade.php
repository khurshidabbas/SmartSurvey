@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <form method="POST" action="{!! route('UpdateCustomSurveyForm') !!}">
                {{ csrf_field() }}
                id: <input type="text" id="id" name="id" value="{{$survey->id}}">
                user_id: <input type="text" id="user_id" name="user_id" value="{{Auth::id()}}">
                title: <input type="text" id="title" name="title" value="{{$survey->title}}">
                question: <input type="text" id="question" name="question" value="{{$survey->question}}">
                <button type="submit">Submit</button>
            </form>

        </div>
    </div>
@endsection