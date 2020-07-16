@extends("layouts.app")
@section("content")

    <div class="container">
        <div class="form-group">
    <form method="POST" action="/apartments/{{$apartment->id}}">
        @method("PATCH")
        @csrf

        <label for="apartment_number">Broj stana</label>
        <input type="text" id="number" name="number" class="form-control" value="{{$apartment->number}}">
        <p></p>

        <label for="apartment_name">Ime</label>
        <input type="text" id="name" name="name" class="form-control" value="{{$apartment->name}}">

        <p></p>

        <label for="apartment_id">Broj u bazi podataka</label>
        <input type="text" id="id" name="id" class="form-control" value="{{$apartment->id}}" disabled>

        <p></p>

        <button type="submit" class="btn btn-danger">Izmeni podatke</button>

    </form>
        </div>
    </div>

@endsection
