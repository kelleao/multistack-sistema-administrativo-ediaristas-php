@extends('adminlte::page')

@section('title', 'Novo Serviço')

@section('content_header')
    <h1>Novo Serviço</h1>
@stop

@section('content')

@include('mensagens')

    <form action="{{ route('servicos.store') }}" method="post">
        @include('serviços._form')
    </form>
@stop