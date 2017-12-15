@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

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

{{--<form method="POST" action="{!! route('PostCustomSurveyInvitation') !!}">--}}
    {{--{{ csrf_field() }}--}}
    {{--@foreach($options as $option)--}}
        {{--<input type="radio" name="optionid" id="optionid" value="{{$option->id}}">--}}
        {{---- {{$option->id}} -- {{$option->option}}--}}
        {{--<br>--}}
        {{--<br>--}}
        {{--<br>--}}
    {{--@endforeach--}}
    {{--<button type="submit">Submit</button>--}}
{{--</form>--}}