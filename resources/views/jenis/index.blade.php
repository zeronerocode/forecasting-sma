@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Jenis Produk') }}</div>

                <div class="card-body">
                    <div class="justify-content-end">
                        <button type="button" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</button>
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
                            <tr>
                                <th scope="row">GC01</th>
                                <th>Guci</th>
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
                                <th scope="row">PR01</th>
                                <th>Piring</th>
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
                                <th scope="row">VS01</th>
                                <th>Vas Bunga</th>
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
