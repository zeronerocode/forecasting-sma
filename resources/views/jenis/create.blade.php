@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Tambah Produk') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('jenis.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="">Kode Produk</label>
                            <input type="text" name="kode_produk" class="form-control">
                        </div>
                        <div class="form-group py-2">
                            <label for="">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
