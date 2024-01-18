@extends('welcome')
@section('main')
        <div class="chart-container">
            <canvas id="barChart"></canvas>
            <canvas id="lineChart"></canvas>
            <canvas id="horizontalChart"></canvas>
            <canvas id="doughnutChart"></canvas>

        </div>


    <script src="./js/graficos.js"></script>

    <link rel="stylesheet" href="{{ asset('./storage/assets/styles/analises/analises.css') }}">
    <link rel="stylesheet" href="{{ asset('./storage/assets/styles/analises/analises-medias-queries.css') }}">

@endsection
