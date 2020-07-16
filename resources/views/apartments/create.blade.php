@extends("layouts.app")
@section("content")

<div class="container">
    <form action="/apartments" method="POST">
        @csrf

        <div class="form-group">
            <label for="brojStana">Broj Stana</label>
            <input type="text" class="form-control" name="apartmentNumber" id="apartmentNumber" aria-describedby="helpId" placeholder="Broj stana">
        </div>

        <div class="form-group">
            <label for="Ime i prezime vlasnika">Ime i prezime</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Stan">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">Dodaj stan</button>
        </div>

    </form>
    </div>
@endsection
