@extends('layouts.app')
@section('content')

    <div class="container">

        <form action="/payments" method="POST">
            @csrf
            <div class="form-group">
                <label for="number">Broj stana</label>
                <input type="number" name="number" id="number" class="form-control">
            </div>

            <div class="form-group">
            <label for="paid">Suma</label>
            <input type="number" id="paid" name="paid" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Dodaj uplatu</button>
            </div>

        </form>


@endsection
