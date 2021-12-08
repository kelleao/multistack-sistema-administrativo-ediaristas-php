@extends('adminlte::page')

@section('title', 'Lista de Serviços')

@section('content_header')
    <h1>Lista de Serviços</h1>
@stop

@section('content')
    <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Valor minimo</th>
                <th scope="col">Quantidade horas</th>
                <th scope="col">Porcetagem</th>
                <th scope="col">Valor quarto</th>
                <th scope="col">Horas quarto</th>
                <th scope="col">Valor sala</th>
                <th scope="col">Horas sala</th>
                <th scope="col">Valor banheiro</th>
                <th scope="col">Horas banheiro</th>
                <th scope="col">Valor cozinha</th>
                <th scope="col">Horas cozinha</th>
                <th scope="col">Valor quintal</th>
                <th scope="col">Horas quintal</th>
                <th scope="col">Valor outras</th>
                <th scope="col">Horas outras</th>
                <th scope="col">Ações</th>    
                </tr>
            </thead>
                <tbody>
                    @forelse ($servicos as $servico)
                    <tr>
                        <th>{{ $servico->id }}</th>
                        <td>{{ $servico->nome }}</td>
                        <td>{{ $servico->valor_minimo }}</td>
                        <td>{{ $servico->quantidade_horas }}</td>
                        <td>{{ $servico->porcentagem }}</td>
                        <td>{{ $servico->valor_quarto }}</td>
                        <td>{{ $servico->horas_quarto }}</td>
                        <td>{{ $servico->valor_sala }}</td>
                        <td>{{ $servico->horas_sala }}</td>
                        <td>{{ $servico->valor_banheiro }}</td>
                        <td>{{ $servico->horas_banheiro }}</td>
                        <td>{{ $servico->valor_cozinha }}</td>
                        <td>{{ $servico->horas_cozinha }}</td>
                        <td>{{ $servico->valor_quintal }}</td>
                        <td>{{ $servico->horas_quintal }}</td>
                        <td>{{ $servico->valor_outros }}</td>
                        <td>{{ $servico->horas_outros }}</td>
                        <td>
                            <a href="{{ route('servicos.edit', $servico) }}" class="btn btn-success">Atualizar</a>
                        </td>
                        </tr>
                    @empty
                        <tr>
                            <th></th>
                            <th>Nenhum registro foi encontrado</th>
                            <th></th>
                        </tr>
                    @endforelse
                   
            </tbody>
    </table>
        <div class="d-flex justify-content-center">
             {{ $servicos->links() }}
        </div>
       
        <div class="float-right">
            <a href="{{ route('servicos.create') }}" class="btn btn-primary">Novo Serviço</a>
        </div>
@stop