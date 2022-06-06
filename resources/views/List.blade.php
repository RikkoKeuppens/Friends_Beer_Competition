<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
</head>
<section>
    <!--for demo wrap-->
    <h1>Bier klassement<a href="/ad" class="mt-0  btn btn-rounded" data-mdb-ripple-color="dark"><i class="pint mb-1 fa-solid fa-beer-mug-empty light"></i></a></h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
            <tr>
                <th class="col-6">Naam</th>
                <th class="text-center">Biertjes</th>
                <th class="text-right"></th>
                <th class="text-right"></th>
            </tr>
            </thead>
        </table>
    </div>
    <div>
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
            @foreach($beers as $beer)
                <tr>
                    <form action="/{{$beer->id}}/EditProfile" method="get">
                        <input type="hidden" name="id" id="id" value="{{$beer->id}}">
                        <td class="col-6"><button class="btnNone">{{$beer->name}}</button></td>
                    </form>
                    <td class="text-center">{{$beer->beerAmount}}</td>
                    <td class="btnPlus text-right">
                        <form action="{{$beer->id}}" method="post">
                            @method('put')
                            @csrf
                            <input type="hidden" hidden value="{{$beer->id}}" name="id" id="id">
                            <input type="hidden" hidden value="plus" name="plus" id="plus">
                        <button type="submit" class="font-weight-bold text-right plus text-right">+</button>
                        </form>
                    </td>
                    <td class="btnPlus text-right">
                        <form action="{{$beer->id}}" method="post">
                            @method('put')
                            @csrf
                            <input type="hidden" hidden value="{{$beer->id}}" name="id" id="id">
                            <input type="hidden" hidden value="min" name="plus" id="plus">
                            <button type="submit" class="font-weight-bold text-center min">-</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="create" class="mt-4 btn btn-outline-light btn-rounded" data-mdb-ripple-color="dark">Speler toevoegen</a>
</section>
