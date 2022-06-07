<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
</head>
<section>
    <!--for demo wrap-->
    <h1>{{$person->name}}</h1>
    <form action="/{{ $person->id }}/EditIT" method="post">
        @method('put')
        @csrf
        <div class="form-group mt-4 col-12 row">
            <input type="text" name="name" id="name"
                   class="col-8 form-control @error('name') is-invalid @enderror"
                   placeholder="Name"
                   minlength="3"
                   required
                   value="{{ old('name', $person->name) }}">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <input class="col-1 selected offset-1" type="radio" @if($person->selected == true) checked @endif id="selected" name="selected" value="true">
            <input class="col-1 notSelected offset-1" type="radio" @if($person->selected != true) checked @endif id="notSelected" name="selected" value="false">

            <input type="number" name="beerAmount" id="beerAmount"
                   class="form-control mt-4 @error('beerAmount') is-invalid @enderror"
                   placeholder="Biertjes"
                   min="1" max="24">
            @error('beerAmount')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <input type="hidden" id="id" name="id" value="{{$person->id}}">
        </div>
        <button type="submit" class="mt-4 btn btn-outline-light btn-rounded ">Aanpassen</button>
    </form>
    @if($person->id == 1)
        <a href="/settings"><i class="pint fa-solid fa-gear mt-5"></i></a>
    @endif
</section>
