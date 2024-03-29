<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::oldest()->paginate(20);
        return view('jenis.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("jenis.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate ( [
            "kode_produk" => ['required', 'string'],
            "nama_produk" => ['required', 'string']
        ]);

        $produk = Produk::create([
            "kode_produk" => $request -> kode_produk,
            "nama_produk" => $request -> nama_produk
        ]);

        return redirect()->route('jenis.index')->with(['success' => 'Member Berhasil Disimpan!']);
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
        $produk = Produk::findOrFail($id);
        $produk->delete();

        if ($produk) {
            return redirect()
                ->route('jenis.index')
                ->with([
                    'success' => 'Produk has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('jenis.index')
                ->with([
                    'error' => 'Produk problem has occurred, please try again'
                ]);
        }
    }
}
