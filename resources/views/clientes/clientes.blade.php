@extends('welcome')
@section('main')
    <div class="dashboarddata">
        <livewire:user-table />
    </div>




    <link rel="stylesheet" href="{{ asset('./storage/assets/styles/clientes/usertable.css') }}">
    <link rel="stylesheet" href="{{ asset('./storage/assets/styles/clientes/clientes.css') }}">
    <link rel="stylesheet" href="{{ asset('./storage/assets/styles/clientes/clientes-medias-queries.css') }}">
@endsection
