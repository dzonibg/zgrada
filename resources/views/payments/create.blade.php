@extends('layouts.app')
@section('content')

    <div class="container">

        <form action="/payments" method="POST">
            @csrf
            <div class="form-group">
                <label for="number">Broj stana</label>
                <input type="number" name="number" id="number" class="form-control" value="{{$_GET['number'] ?? ''}}" required>
            </div>

            <div class="form-group">
            <label for="paid">Suma</label>
            <select id="paid" name="paid" class="form-control" required>
                @for($i=1; $i<13; $i++)
                <option value="{{2600 * $i}}">{{2600 * $i}} RSD - {{$i}} Meseci</option>
                    @endfor
            </select>
            </div>

            <label for="method">Nacin uplate</label>
            <select id="method" name="method" class="form-control required">
                <option value="Uplatnica">Uplatnica</option>
                <option value="Naplata">Naplata u zgradi</option>
            </select>

            <div class="form-group">
                <label for="date">Datum uplate</label>
                <!-- <input type="date"  name="date" id="date" class="form-control" value="{{\Carbon\Carbon::today()->toDateString()}}" required> --!>
                <input type="date" name="date" id="date" class="form-control" value="{{\Carbon\Carbon::today()->toDateString()}}" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Dodaj uplatu</button>
            </div>

        </form>


@endsection
