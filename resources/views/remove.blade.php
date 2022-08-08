<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <title>Speler verwijderen</title>
</head>
<section>
    <h1>Verwijder speler</h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
            <tr>
                <th>Naam</th>
                <th></th>
            </tr>
            </thead>
        </table>
    </div>
    <div class="">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
            @foreach($spelers as $speler)
                <tr>
                    <td>{{$speler->name}}</td>
                    <td class="text-right">
                        <form action="/" method="post">
                            @method('delete')
                            @csrf
                            <input type="hidden" hidden name="remove" id="remove" value="{{$speler->id}}">
                            <div class="btn-group btn-group-sm">
                                <button type="submit" class="btn btn-outline-danger"
                                        data-toggle="tooltip"
                                        title="Delete {{ $speler->name }}">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
