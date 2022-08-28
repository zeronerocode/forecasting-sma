@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Forecasting') }}</div>

                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="">Alpha</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group py-2">
                            <label for="">Next Periode</label>
                            <input type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Hitung</button>
                    </form>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">{{ __('Piring') }}</div>

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
                            {{$total = 0}}
                            @forelse($penjualans as $penjualan)
                            <tr>
                                <th scope="row">
                                        @if($penjualan->bulan === 1)
                                        January
                                        @elseif($penjualan->bulan === 2)
                                        February
                                        @elseif($penjualan->bulan === 3)
                                        Maret
                                        @elseif($penjualan->bulan === 4)
                                        April
                                        @elseif($penjualan->bulan === 5)
                                        Mei
                                        @elseif($penjualan->bulan === 6)
                                        Juni
                                        @elseif($penjualan->bulan === 7)
                                        Juli
                                        @elseif($penjualan->bulan === 8)
                                        Agustus
                                        @elseif($penjualan->bulan === 9)
                                        September
                                        @elseif($penjualan->bulan === 10)
                                        Oktober
                                        @elseif($penjualan->bulan === 11)
                                        November
                                        @else
                                        Desember
                                        @endif
                                    </th>
                                <th>{{$penjualan->jumlah}}</th>
                                <th>{{$total += ($penjualan->jumlah/ $penjualan->bulan)}}</th>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data Penjualan belum Tersedia.
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
