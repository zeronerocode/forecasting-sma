<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualans = Penjualan::oldest()->paginate(10);
        return view("periode.index", compact("penjualans"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("periode.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            "bulan" => ['required'],
            "tahun" => ['required'],
            "kode_produk" => ['required'],
            "jumlah" => ['required']
        ]);

        $penjualan = Penjualan::create([
            "bulan" => $request->bulan,
            "tahun" => $request->tahun,
            "kode_produk" => $request->kode_produk,
            "jumlah" => $request->jumlah
        ]);

        return redirect()->route('periode.index')->with(['success' => 'Member Berhasil Disimpan!']);
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
        $produk = Penjualan::findOrFail($id);
        $produk->delete();

        if ($produk) {
            return redirect()
                ->route('periode.index')
                ->with([
                    'success' => 'Produk has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('periode.index')
                ->with([
                    'error' => 'Produk problem has occurred, please try again'
                ]);
        }
    }
}
