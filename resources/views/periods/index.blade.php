@extends('layouts.app')
@section('content')
    <div class="container">

    <p>Meseci naplate:</p>
        @foreach($periods as $period)
        <p>{{$period->month_number}} - {{$period->month}}</p>

        @endforeach

        <a href="/periods/create" class="btn btn-primary">Dodaj mesec za naplatu</a>

    </div>
@endsection
