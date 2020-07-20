@extends("layouts.app")
@section("content")

<div class="container">
    <h2>Stan {{$apartment->number}} - {{$apartment->name}}</h2>
    <hr>
    <p>Ukupno placeno: {{$apartment->payment->sum('paid')}} RSD</p>
    <p>Meseci placeno: {{$apartment->payment->sum('paid')/2600 ?? ''}}</p>
    <p>Prosecno placeno po mesecu: @if($apartment->months_paid>0) {{$apartment->total_paid/$apartment->months_paid}} @endif RSD</p>
    <hr>
    <p>Uplate:
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Meseci</th>
            <th scope="col">Uplaceno</th>
            <th scope="col">Datum</th>
            <th scope="col">Nacin</th>
            <th scope="col">Mesec</th>

        </tr>
        </thead>
        <tbody>
    @foreach($payments as $payment)

        <tr>
            <th scope="row">{{$payment->paid/2600}}</th>
            <td>{{$payment->paid}}</td>
            <td>{{$payment->payment_date}}</td>
            <td>{{$payment->payment_method}}</td>
            <td>{{$payment->payment_month_name}}</td>
        </tr>


        @endforeach
        </tbody>
    </table>
    <p><a href="{{$apartment->id}}/edit">Izmeni podatke o stanu</a></p>

        <p>

            <form action="/payments/create" method="GET">
            <input type="hidden" name="number" id="number" value="{{$apartment->number}}">
            <button type="submit" class="btn btn-primary">Dodaj uplatu</button>
        </form>

        </p>

</div>

@endsection
