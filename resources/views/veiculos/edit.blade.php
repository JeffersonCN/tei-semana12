@extends('layouts.base')

@section('title', 'Veículo - Editar')

@section('content')
    <div class="ui two column grid">
        <div class="column">
            <div class="ui raised segment">
                <form class="ui equal width form" action="{{ route('veiculos.update', $veiculo) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="ui header">ID: {{ $veiculo->id }}</div>
                    <div class="fields">
                        <div class="field">
                            <label>Marca</label>
                            <input type="text" name="marca" value="{{ $veiculo->marca }}" required>
                        </div>
                        <div class="field">
                            <label>Modelo</label>
                            <input type="text" name="modelo" value="{{ $veiculo->modelo }}" required>
                        </div>
                        <div class="field">
                            <label>Ano</label>
                            <input type="number" name="ano"max="2019" min="1950" value={{ $veiculo->ano }} required>
                        </div>
                        <div class="field">
                            <label style="color: #fff;">.</label>
                            <button class="ui right floated green button" onclick="submit()">
                                <i class="icon save"></i>
                                Salvar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection