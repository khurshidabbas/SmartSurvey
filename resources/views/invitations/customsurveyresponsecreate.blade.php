@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">


            <form method="POST" action="{!! route('PostCustomSurveyInvitation') !!}">
                {{ csrf_field() }}
                @foreach($options as $option)
                    <input type="radio" name="optionid" id="optionid" value="{{$option->id}}">
                    -- {{$option->id}} -- {{$option->option}}
                    <br>
                    <br>
                    <br>
                @endforeach
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
