@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Input Penjualan') }}</div>

                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="">Bulan</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group py-2">
                            <label for="">Tahun</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Kode Produk</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group py-2">
                            <label for="">Jumlah</label>
                            <input type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
