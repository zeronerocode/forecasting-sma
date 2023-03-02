<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class HitungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bulans = Penjualan::pluck('bulan')->toArray();;
        $dataPoints = Penjualan::pluck('jumlah')->toArray();
        $alpha = 0.5 ;
        $smoothedDataPoints = [];
        $movingAverageDataPoints = [];
        $windowSize = 3;

        $smoothedDataPoints[0] = $dataPoints[0]; 
        for ($i = 1; $i < count($dataPoints); $i++) {
            $smoothedDataPoints[$i] = $alpha * $dataPoints[$i] + (1 - $alpha) * $smoothedDataPoints[$i-1]; // Apply the exponential smoothing formula
        }

        $movingAverageDataPoints = [];
        for ($i = 0; $i < count($dataPoints); $i++) {
            if ($i < $windowSize-1) {
                // Not enough data to calculate a moving average yet
                $movingAverageDataPoints[] = null;
            } else {
                // Calculate the moving average
                $sum = 0;
                for ($j = 0; $j < $windowSize; $j++) {
                    $sum += $dataPoints[$i-$j];
                }
                $movingAverageDataPoints[] = $sum / $windowSize;
            }
        }
        
        return view("hitung.index", [
            'dataPoints' => $dataPoints,
            'smoothedDataPoints' => $smoothedDataPoints,
            'movingAverageDataPoints' => $movingAverageDataPoints,
            'bulans' => $bulans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
