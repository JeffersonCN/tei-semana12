@extends('layouts.base')

@section('title', 'Veículo')

@section('content')
    <div class="ui two column grid">
        <div class="column">
            <div class="ui raised segment">
                <div class="ui header">ID: {{ $veiculo->id }}</div>
                <div class="ui list">
                    <div class="item">Marca: {{ $veiculo->marca }}</div>
                    <div class="item">Modelo: {{ $veiculo->modelo }}</div>
                    <div class="item">Ano: {{ $veiculo->ano }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection