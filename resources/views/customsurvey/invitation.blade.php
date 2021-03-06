@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="panel-title">Send Invitations</h1>
                </div>
                <div class="panel-body">
                    <h2 class="text-primary">Share the below Link</h2>
                    <h2>
                        <input class="form-control" value="{{$link}}" readonly>
                    </h2>

                    <div align="center">
                        <h2 class="text-primary">Scan me to leave a feedback using your Smartphone.</h2>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="panel-title">QR Code</div>
                            </div>
                            <div class="panel-body">
                                {!! QrCode::format('svg')
                                ->backgroundColor(255, 255, 255)->color(0, 0, 0)
                                ->size(300)->generate($link)!!}
                            </div>
                        </div>

                        <form class="form" method="POST" action="{!! route('Email') !!}">
                            {{ csrf_field() }}

                            <input class="form-control" type="hidden" id="link" name="link"
                                   value="{{$link}}">

                            <div class="input-group-lg">
                                <h4 class="text-primary">Email Address</h4>
                                <input class="form-control" placeholder="abc@xyz.com" type="email" id="email"
                                       name="email" required>
                                <br>
                            </div>

                            <button class="form-control btn btn-primary" type="submit">Send Invitation!</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection