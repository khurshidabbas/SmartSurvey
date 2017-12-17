<h1>Smart Survey</h1>

<hr>

<h2>{{$survey->title}}</h2>
<h3>{{$survey->question}}</h3>

<br>

<h2>Feedbacks:</h2>
<hr>
@foreach($responses as $response)

    <h4>{{$response->message}}</h4>
    <div>
        <p>
            <span class="text-primary">Created:</span> {{$response->created_at}}
            ---
            <span class="text-primary">Updated:</span> {{$response->updated_at}}
        </p>
    </div>
    <hr>

@endforeach