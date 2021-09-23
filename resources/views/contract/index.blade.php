@extends('layout.app')

@section('content')
<div class="container">
    @if(session('message'))
        <div class="alert alert-success m-3 small"> {{ session('message') }}</div>
    @endif
<h1 class="text-center m-4">Contratos</h1>
<table class="table table-primary">
    <thead>
    <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Fecha</th>
        <th scope="col">Origen</th>
        <th scope="col">Destino</th>
        <th scope="col">Tarifa 20</th>
        <th scope="col">Tarifa 40</th>
        <th scope="col">Tarifa 40 HC</th>
        <th scope="col">Moneda</th>
    </tr>
    </thead>
    <tbody>
    @foreach($contracts as $contract)
        @foreach($contract->rates as $rates)
            <tr>
            <th scope="row">{{$contract->nombre}}</th>
            <td>{{$contract->fecha}}</td>
            <td>{{$rates->origin}}</td>
            <td>{{$rates->destination}}</td>
            <td>{{$rates->twenty}}</td>
            <td>{{$rates->forty}}</td>
            <td>{{$rates->fortyhc}}</td>
            <td>{{$rates->currency}}</td>
        </tr>
        @endforeach
    @endforeach
    </tbody>
</table>
</div>
@endsection
