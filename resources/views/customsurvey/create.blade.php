@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <form method="POST" action="{!! route('CreateCustomSurveyForm') !!}">
                {{ csrf_field() }}
                user_id: <input type="text" id="user_id" name="user_id" value="{{Auth::id()}}">
                title: <input type="text" id="title" name="title">
                question: <input type="text" id="question" name="question">
                <button type="submit">Submit</button>
            </form>

        </div>
    </div>
@endsection