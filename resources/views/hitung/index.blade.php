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
                            <tr>
                                <th scope="row">January</th>
                                <th>70</th>
                                <th>0</th>
                            </tr>
                            <tr>
                                <th scope="row">February</th>
                                <th>50</th>
                                <th>70</th>
                            </tr>
                            <tr>
                                <th scope="row">Maret</th>
                                <th>80</th>
                                <th>68</th>
                            </tr>
                            <tr>
                                <th scope="row">April</th>
                                <th>70</th>
                                <th>69.2</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
