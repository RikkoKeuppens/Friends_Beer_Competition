<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
    <section class="container">
        <h1>{{$randomName}}
            @if($randomNumber == 6)
                doe een adje!
            @endif
            @if($randomNumber < 6 && $randomNumber > 1)
                neemt {{$randomNumber}} slokken!
            @endif
            @if($randomNumber == 1)
                neemt {{$randomNumber}} slok!
            @endif
        </h1>
        <div class="text-center beneden">
            <a href="/ad" class="mt-0 btn btn-rounded" data-mdb-ripple-color="dark"><i class="pint mb-1 fa-solid fa-beer-mug-empty light"></i></a>
            <a href="/"  class="mt-0 btn btn-rounded"><i class="fa-solid fa-house pint mb-1 light"></i></a>
        </div>
    </section>
</body>

