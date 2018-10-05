<html>
<head>
</head>

<body>

<div align="center">
    <h2 class="text-primary">Click the below Link</h2>
    <h2>
        <input class="form-control" value="{{$link}}" readonly>
    </h2>
</div>

<div align="center">
    <h2 class="text-primary">Scan me to leave a feedback using your Smartphone.</h2>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3>QR Code</h3>
        </div>
        <div class="panel-body">
            {!! QrCode::format('svg')
            ->backgroundColor(255, 255, 255)->color(0, 0, 0)
            ->size(300)->generate($link) !!}
        </div>
    </div>
</div>


</body>

</html>