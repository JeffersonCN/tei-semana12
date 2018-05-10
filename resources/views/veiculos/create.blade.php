@extends('layouts.base')

@section('title', 'Veículo - Cadastrar')

@section('content')
    <div class="ui two column grid">
        <div class="column">
            <div class="ui raised segment">
                <form class="ui equal width form" method="POST" action="{{ route('veiculos.store') }}">
                    <div class="fields">
                        <div class="field">
                            <label>Marca</label>
                            <input type="text" name="marca" placeholder="Marca" required>
                        </div>
                        <div class="field">
                            <label>Modelo</label>
                            <input type="text" name="modelo" placeholder="Modelo" required>
                        </div>
                        <div class="field">
                            <label>Ano</label>
                            <input type="number" name="ano" placeholder="2018" max="2019" min="1950" required>
                        </div>
                        <div class="field">
                            <label style="color: #fff;">.</label>
                            <button class="ui right floated green button">
                                <i class="icon plus"></i>
                                Cadastrar
                            </button>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                </form>
            </div>
        </div>
    </div>
@endsection