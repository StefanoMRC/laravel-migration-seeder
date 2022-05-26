@extends('layout.layout')

@section('cont')
    @foreach ($trains as $key=>$train)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Treno: {{$train->stazione_di_partenza}}-{{$train->stazione_di_arrivo}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Azienda:{{$train->azienda}}</h6>
                <p class="card-text">Orario partenza <span>{{$train->orario_partenza}} </span></p>
                <p class="card-text">Orario arrivo:{{$train->orario_arrivo}} </span></p>
                <h6 class="card-subtitle mb-2 text-muted">Data partenza:{{$train->data_partenza}}</h6>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    @endforeach
@endsection
