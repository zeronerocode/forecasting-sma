@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Halaman Penjualan') }}</div>

                <div class="card-body">
                    <div class="justify-content-end">
                        <button type="button" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</button>
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
                            <tr>
                                <th>1</th>
                                <th>January</th>
                                <th>2020</th>
                                <th>PR01</th>
                                <th>Piring</th>
                                <th>70</th>
                                <th>
                                    <button class="btn btn-light">
                                        <i class="fas fa-external-link-alt text-success"></i>
                                    </button>
                                    <button class="btn btn-light">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                    </button>
                                </th>
                            </tr>
                            <tr>
                                <th>2</th>
                                <th>January</th>
                                <th>2020</th>
                                <th>VS01</th>
                                <th>Vas Bunga</th>
                                <th>80</th>
                                <th>
                                    <button class="btn btn-light">
                                        <i class="fas fa-external-link-alt text-success"></i>
                                    </button>
                                    <button class="btn btn-light">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                    </button>
                                </th>
                            </tr>
                            <tr>
                                <th>3</th>
                                <th>January</th>
                                <th>2020</th>
                                <th>GC01</th>
                                <th>Guci</th>
                                <th>100</th>
                                <th>
                                    <button class="btn btn-light">
                                        <i class="fas fa-external-link-alt text-success"></i>
                                    </button>
                                    <button class="btn btn-light">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                    </button>
                                </th>
                            </tr>
                            <tr>
                                <th>4</th>
                                <th>February</th>
                                <th>2020</th>
                                <th>PR01</th>
                                <th>Piring</th>
                                <th>50</th>
                                <th>
                                    <button class="btn btn-light">
                                        <i class="fas fa-external-link-alt text-success"></i>
                                    </button>
                                    <button class="btn btn-light">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                    </button>
                                </th>
                            </tr>
                            <tr>
                                <th>5</th>
                                <th>February</th>
                                <th>2020</th>
                                <th>VS01</th>
                                <th>Vas Bunga</th>
                                <th>60</th>
                                <th>
                                    <button class="btn btn-light">
                                        <i class="fas fa-external-link-alt text-success"></i>
                                    </button>
                                    <button class="btn btn-light">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                    </button>
                                </th>
                            </tr>
                            <tr>
                                <th>6</th>
                                <th>February</th>
                                <th>2020</th>
                                <th>GC01</th>
                                <th>Guci</th>
                                <th>80</th>
                                <th>
                                    <button class="btn btn-light">
                                        <i class="fas fa-external-link-alt text-success"></i>
                                    </button>
                                    <button class="btn btn-light">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                    </button>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
