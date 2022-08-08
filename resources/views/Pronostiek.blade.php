<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <title>Bier pronostiek</title>
</head>
<body class="Blue">
<section>
    <!--for demo wrap-->
    <h1>Bier Pronostiek</h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
            <tr>
                <th class="text-left">Naam</th>
                <th class="text-center">Totaal</th>
                <th class="text-center">Zuipschuit</th>
            </tr>
            </thead>
        </table>
    </div>
    <div>
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
            @foreach($people as $person)
                @csrf
                @method('put')
                @if($person->id != 20 )
                    <tr>
                    <form action="/{{$person->id}}/EditProfile" method="get">
                        <input type="hidden" name="id" id="id" value="{{$person->id}}">
                        <td class="text-left"><button class="btnNone">{{$person->name}}</button></td>
                    </form>
                    <form action="/pronoSubmit/{{$person->id}}" method="post">
                        <td class="text-center">@if($person->totaal != 1){{$person->totaal}}@endif</td>
                        <td class="text-center">@if($person->hoogste != 1){{$person->hoogste}}@endif</td>
                    </form>
                </tr>
                @endif
            @endforeach
            <tr>
                <td class="col-6 font-weight-bold">Tussenstand:</td>
                <td class="text-center font-weight-bold">{{$total}}</td>
                <td class="text-center font-weight-bold">{{$high->beerAmount}}</td>            </tr>
            </tbody>
        </table>
    </div>
    <div class="text-center">
        <a href="/"  class="mt-0 btn btn-rounded mt-3"><i class="fa-solid fa-house pint mb-1 light"></i></a>
    </div>
</section>


</body>
