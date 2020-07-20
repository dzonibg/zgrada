@extends("layouts.app")
@section("content")

<div class="container">
    <h2>Stan {{$apartment->number}} - {{$apartment->name}}</h2>
    <hr>
    <p>Ukupno placeno: {{$apartment->payment->sum('paid')}} RSD</p>
    <p>Meseci placeno: {{$apartment->payment->sum('paid')/2600 ?? ''}}</p>
    <p>Prosecno placeno po mesecu: @if($apartment->months_paid>0) {{$apartment->total_paid/$apartment->months_paid}} @endif RSD</p>
    <hr>
    <p>Placeno ukupno:
    <ol>
    @foreach($payments as $payment)
        <li>{{$payment->paid}} - {{$payment->payment_date}}</li>
        @endforeach
</ol>
    </p>
    </p>
    <p><a href="{{$apartment->id}}/edit">Izmeni podatke</a></p>

        <p>

            <form action="/payments/create" method="GET">
            <input type="hidden" name="number" id="number" value="{{$apartment->number}}">
            <button type="submit" class="btn btn-primary">Dodaj uplatu</button>
        </form>

        </p>

</div>

@endsection
