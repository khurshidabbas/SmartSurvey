@extends('layouts.app')

@section('script')
    <script>

        var number = 0;

        @foreach($responses as $response)
            number++;
                @endforeach

        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: ["Responses"],

                datasets: [{
                    data: [number],

                    backgroundColor: [
                        'rgba(70, 189, 255, 0.5)'
                    ],

                    hoverBackgroundColor: [
                        'rgba(128, 204, 255, 0.1)'
                    ],

                    borderColor: [
                        'rgba(51, 102, 255)'
                    ],

                    borderWidth: 1
                }]
            },
            options: {
                scales: {}
            }
        });
    </script>
@endsection

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

                    <div class="row">
                        <div align="center">
                            <button type="button" class="btn btn-primary"
                                    onclick="location.href='{!! route('CreateSimpleSurveyResponse', ['id'=>$survey->id]) !!}'">
                                Create Response Now!
                            </button>

                            <button type="button" class="btn btn-primary"
                                    onclick="location.href='{!! route('UpdateSimpleSurvey', ['id'=>$survey->id]) !!}'">
                                Update
                            </button>

                            <button type="button" class="btn btn-primary"
                                    onclick="location.href='{!! route('CreateSimpleSurveyInvitation', ['id'=>$survey->id]) !!}'">
                                Invitations
                            </button>

                            <button type="button" class="btn btn-danger"
                                    onclick="location.href='{!! route('DeleteSimpleSurvey', ['id'=>$survey->id]) !!}'">
                                Delete
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div align="center" class="row">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="panel-title">Total Responses</h1>
                </div>
                <div class="panel-body">
                    <div style="width: 75%; height: 75%">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">Download Response</div>
                </div>
                <div class="panel-body">
                    <div align="center">

                        <button type="button" class="btn btn-primary"
                                onclick="location.href='{!! route('DownloadDOCX', ['id'=>$survey->id]) !!}'">
                            Microsoft Word
                        </button>

                        <button type="button" class="btn btn-primary"
                                onclick="location.href='{!! route('DownloadPDF', ['id'=>$survey->id]) !!}'">
                            PDF
                        </button>

                        <button type="button" class="btn btn-primary"
                                onclick="location.href='{!! route('DownloadHTML', ['id'=>$survey->id]) !!}'">
                            Browser ( HTML )
                        </button>

                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <h3 class="text-primary">Responses</h3>

            @foreach($responses as $response)

                <div class="panel panel-primary">
                    <div class="panel-body">
                        <p>{{$response->message}}</p>
                        <div>
                            <p>
                                <span class="text-primary">Created:</span> {{$response->created_at}}
                                ---
                                <span class="text-primary">Updated:</span> {{$response->updated_at}}
                            </p>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

    </div>
@endsection

{{--<h1>id::: {{$survey->id}}</h1>--}}
{{--<h1>user_id::: {{$survey->user_id}}</h1>--}}
{{--<h1>title::: {{$survey->title}}</h1>--}}
{{--<h1>question::: {{$survey->question}}</h1>--}}
{{--<h1>created_at::: {{$survey->created_at}}</h1>--}}
{{--<h1>updated_at::: {{$survey->updated_at}}</h1>--}}


{{--<h3>{{$response->id}}</h3>--}}
{{--<h3>{{$response->survey_id}}</h3>--}}
{{--<h3>{{$response->message}}</h3>--}}
{{--<h3>{{$response->created_at}}</h3>--}}
{{--<h3>{{$response->updated_at}}</h3>--}}