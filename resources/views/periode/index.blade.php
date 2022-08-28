@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Halaman Penjualan') }}</div>

                <div class="card-body">
                    <div class="justify-content-end">
                        <a href="{{route('periode.create')}}" type="button" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</a>
                    </div>
                    <table class="table align-middle">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Bulan</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Code</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($penjualans as $penjualan)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $penjualan->bulan }}</td>
                                <td>{{ $penjualan->tahun }}</td>
                                <td>{{ $penjualan->kode_produk }}</td>
                                <td>{{ $penjualan->kode_produk }}</td>
                                <td>{{ $penjualan->jumlah }}</td>
                                <td>
                                    <button class="btn btn-light">
                                        <i class="fas fa-external-link-alt text-success"></i>
                                    </button>
                                    <button class="btn btn-light">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                    </button>
                                </th>
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
