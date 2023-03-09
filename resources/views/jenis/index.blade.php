@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Jenis Produk') }}</div>

                <div class="card-body">
                    <div class="justify-content-end">
                        <a href="{{ route('jenis.create') }}" type="button" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</a>
                    </div>
                    <table class="table align-middle">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Code</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($produks as $produk)
                            <tr>
                                <th scope="row">{{$produk->kode_produk}}</th>
                                <th>{{$produk->nama_produk}}</th>
                                <th>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('jenis.destroy', $produk->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-light">
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </button>
                                    </form>
                                </th>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                            Data Produk belum Tersedia.
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
