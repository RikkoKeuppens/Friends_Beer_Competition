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
        <div class="form-group mt-4 col-12">
            <input type="text" name="name" id="name"
                   class="form-control @error('name') is-invalid @enderror"
                   placeholder="Name"
                   minlength="3"
                   required
                   value="{{ old('name', $person->name) }}">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <input type="number" name="beerAmount" id="beerAmount"
                   class="form-control mt-4 @error('beerAmount') is-invalid @enderror"
                   placeholder="Biertjes"
                   min="1" max="24">
            @error('beerAmount')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <input type="hidden" id="id" name="id" value="{{$person->id}}">
        </div>
        <button type="submit" class="mt-4 btn btn-outline-light btn-rounded ml-3">Aanpassen</button>
    </form>
</section>
