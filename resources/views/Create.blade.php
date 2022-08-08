<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
<title>Speler toevoegen</title>
</head>
<section>
    <h1>Voeg speler toe</h1>
    <form action="/" method="post">
        @csrf
        <div class="form-row">
            <div class="col-sm-12 offset-sm-0 col-md-5 offset-md-3 mt-4">
                <input minlength="3" required maxlength="18"
                       type="text" class="form-control" placeholder="Naam"
                        id="name" name="name">
            </div>
            <div class="col-sm-4 col-md-1">
                <button type="submit" href="create" class=" mt-4 btn btn-outline-light btn-rounded" data-mdb-ripple-color="dark">Toevoegen</button>
            </div>
        </div>
    </form>
</section>
