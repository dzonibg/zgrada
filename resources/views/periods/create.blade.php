@extends('layouts.app')
@section('content')
    <div class="container">

        <p>Poslednja naplata:</p>
        <p>{{$lastPeriod->id ?? '0'}} - {{$lastPeriod->month ?? 'Nema meseci u bazi.'}} - Broj meseca: {{$lastPeriod->month_number ?? ''}}</p>

        <form action="/periods" method="POST">
            @csrf
            <div class="form-group">
                <label for="month">Naziv meseca</label>
                <input name="month" id="month" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="month_number">Redni broj meseca</label>
                <?php $newMonth = 1; ?>
                @isset($lastPeriod->month_number)
                    <?php $newMonth = $lastPeriod->month_number +1; ?>
                @endisset
                <input name="month_number" id="month_number" class="form-control" value="{{$newMonth}}" required readonly>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Dodaj naplatu</button>
            </div>
        </form>

    </div>

@endsection
