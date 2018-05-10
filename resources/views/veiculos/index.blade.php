@extends('layouts.base')

@section('title', 'Veículos')

@section('content')
    <div class="ui two column grid">
        <div class="column">
            <div class="ui raised segment">
                <a href="{{ route('veiculos.create') }}">
                    <button class="ui green button">
                        <i class="icon plus"></i>
                        Cadastrar
                    </button>
                </a>

                <table class="ui single line table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Ano</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($veiculos as $veiculo)
                        <tr>
                            <td class="left aligned collapsing">{{ $veiculo->id }}</td>
                            <td>{{ $veiculo->marca }}</td>
                            <td>{{ $veiculo->modelo }}</td>
                            <td>{{ $veiculo->ano }}</td>
                            <td class="right aligned collapsing">
                                <a href="{{ route('veiculos.show', $veiculo) }}">
                                    <button class="mini teal ui icon button">
                                        <i class="eye icon"></i>
                                    </button>
                                </a>
                                <a href="{{ route('veiculos.edit', $veiculo) }}">
                                    <button class="mini yellow ui icon button">
                                        <i class="edit icon"></i>
                                    </button>
                                </a>

                                <button class="mini red ui icon button" onclick="confirmarExclusao()">
                                    <i class="trash icon"></i>
                                </button>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <div class="ui basic modal">
            <div class="ui icon header">
                <i class="car icon"></i>
                Você deseja realmente excluir o veículo?
            </div>
            <div class="actions">
                <div class="ui centered grid">
                    <div class="ui green cancel inverted button">
                        <i class="remove icon"></i>
                        Não
                    </div>
                    <form action="{{ route('veiculos.destroy', $veiculo) }}" style="display: inline; padding: 0 0;"
                          method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="ui red ok inverted button">
                            <i class="checkmark icon"></i>
                            Sim
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmarExclusao() {
            $('.ui.basic.modal')
                .modal('show')
            ;
        }
    </script>

@endsection