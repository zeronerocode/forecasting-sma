@extends('layouts.app')
@php
  $bulan = [
    1 => 'January',
    2 => 'February',
    3 => 'March',
    4 => 'April',
    // 5 => 'May',
    // 6 => 'June',
    // 7 => 'July',
    // 8 => 'August',
    // 9 => 'September',
    // 10 => 'October',
    // 11 => 'November',
    // 12 => 'December'
  ];
@endphp

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Peramalan Simple Moving Average') }}</div>

                <div class="card-body">
                <table class="table align-middle">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Bulan(t)</th>
                                <th scope="col">Y<small>t</small></th>
                                <th scope="col">F<small>t</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <span class="d-none">{{$total = 0}}</span>
                            @for ($i = 0; $i < count($dataPoints); $i++)
                            <tr>
                                <td>{{ $bulan[$bulans[$i]] }}</td>
                                <td>{{ $dataPoints[$i] }}</td>
                                <td>{{ number_format($movingAverageDataPoints[$i],2)  }}</td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                    <canvas id="sma" height="100px"></canvas>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">{{ __('Peramalan Exponential Smoothing Alpha = 0.5') }}</div>

                <div class="card-body">
                    <table class="table align-middle">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Bulan(t)</th>
                                <th scope="col">Y<small>t</small></th>
                                <th scope="col">F<small>t</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < count($dataPoints); $i++)
                            <tr>
                                <td>{{ $bulan[$bulans[$i]] }}</td>
                                <td>{{ $dataPoints[$i] }}</td>
                                <td>{{ $smoothedDataPoints[$i] }}</td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                    <canvas id="my-chart" height="100px"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Generate a chart using the smoothed data -->
<script>
    var data = {
        labels: [@foreach($bulan as $label) "{{ $label }}", @endforeach], // Set the labels for the x-axis
        
        datasets: [
            {
                label: 'Actual Data',
                data: {{ json_encode($dataPoints) }},
                borderColor: 'blue',
                fill: false
            },
            {
                label: 'Smoothed Data',
                data: {{ json_encode($smoothedDataPoints) }},
                borderColor: 'red',
                fill: false
            }
        ]
    };

    var options = {
        responsive: true
    };

    var ctx = document.getElementById('my-chart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: options
    });
</script>
<script>
    var data = {
        labels: [@foreach($bulan as $label) "{{ $label }}", @endforeach], // Set the labels for the x-axis
        datasets: [
            {
                label: 'Actual Data',
                data: {{ json_encode($dataPoints) }},
                borderColor: 'blue',
                fill: false
            },
            {
                label: 'Smoothed Data',
                data: {{ json_encode($movingAverageDataPoints) }},
                borderColor: 'red',
                fill: false
            }
        ]
    };

    var options = {
        responsive: true
    };

    var ctx = document.getElementById('sma').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: options
    });
</script>
@endsection


