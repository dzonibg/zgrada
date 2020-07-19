@extends("layouts.app")
@section("content")

<div class="container">
    <h2>Stan {{$apartment->number}} - {{$apartment->name}}</h2>
    <hr>
    <p>Ukupno placeno: {{$apartment->total_paid}} RSD</p>
    <p>Meseci placeno: {{$apartment->months_paid}}</p>
    <p>Prosecno placeno po mesecu: {{$apartment->total_paid/$apartment->months_paid}} RSD</p>
    <p>NON-DUMMY-DATA:</p>
    <hr>
    <p>Placeno ukupno: {{var_dump($apartment->payment->id)}}</p>
    <p><a href="{{$apartment->id}}/edit">Izmeni</a></p>
</div>

@endsection
