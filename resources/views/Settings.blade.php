<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <title>Instellingen</title>
</head>
<section>
    <h1>Settings</h1>
    <hr>
    <h2>Ad kans</h2>
    <div class="row col-12 justify-content-around bdWhite">
        <form class="col-3" action="/1/setSetting" method="post">
            @csrf
            @method('put')
            <input type="hidden"
                   name="value" id="value" value="3">
            <button class="mt-4 btn btn-outline-light btn-rounded" data-mdb-ripple-color="dark" type="submit">1/3</button>
        </form>
        <form class="col-3" action="/1/setSetting" method="post">
            @csrf
            @method('put')
            <input type="hidden"
                   name="value" id="value" value="6">
            <button class="mt-4 btn btn-outline-light btn-rounded" data-mdb-ripple-color="dark" type="submit">1/6</button>
        </form>
        <form class="col-3" action="/1/setSetting" method="post">
            @csrf
            @method('put')
            <input type="hidden"
                   name="value" id="value" value="12">
            <button class="mt-4 btn btn-outline-light btn-rounded" data-mdb-ripple-color="dark" type="submit">1/12</button>
        </form>
        <form class="col-3" action="/1/setSetting" method="post">
            @csrf
            @method('put')
            <input type="hidden"
                   name="value" id="value" value="18">
            <button class="mt-4 btn btn-outline-light btn-rounded" data-mdb-ripple-color="dark" type="submit">1/18</button>
        </form>
        <form action="/1/setSetting" method="post">
            @csrf
            @method('put')
            <input type="hidden"
                   name="value" id="value" value="0">
            <button class="btn btn-outline-light btn-rounded" data-mdb-ripple-color="dark" type="submit">Geen kans</button>
        </form>
        <form action="/1/setSetting" method="post">
            @csrf
            @method('put')
            <input type="hidden"
                   name="value" id="value" value="1">
            <button class="btn btn-outline-light btn-rounded" data-mdb-ripple-color="dark" type="submit">Altijd prijs</button>
        </form>
    </div>
    <hr>
    <h2><a class="noclass" href="/delete">Spelers verwijderen</a></h2>
</section>
