@extends("layouts.app")
@section("content")

<div class="container">
    @if(isset($message))
        <div class="card bg-info">
            <div class="card-header">Dodat stan.</div>
            <div class="card-body">
                <p>{{$message}}</p>
            </div>
        </div>

    @endif
    <h1>Stanovi</h1>
    <p>Spisak:</p>
    <ol>
    @foreach($apartments as $apartment)
        <li>Stan {{ $apartment->number }}: {{ $apartment->name }} - <a href="/apartments/{{$apartment->id}}">Prikaži</a></li>
    @endforeach
    </ol>
        <p></p>
        <div class="card bg-light">
            <center>
            <div class="card-body">
                <a href="/apartments/create" class="btn btn-light">Dodaj Stan</a>
            </div>
            </center>
        </div>
</div>


@endsection
