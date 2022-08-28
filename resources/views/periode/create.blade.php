@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Input Penjualan') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('periode.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="">Bulan</label>
                            <input name="bulan" type="text" class="form-control">
                        </div>
                        <div class="form-group py-2">
                            <label for="">Tahun</label>
                            <input name="tahun" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Kode Produk</label>
                            <input name="kode_produk" type="text" class="form-control">
                        </div>
                        <div class="form-group py-2">
                            <label for="">Jumlah</label>
                            <input name="jumlah" type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
