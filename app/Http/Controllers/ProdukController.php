<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
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
        $produk = Produk::findOrFail($id);
        return view('produk.show',compact('produk'));
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


    public function indexapi()
    {
        return response()->json(Produk::all(),200);
    }

    public function createapi(Request $request, Produk $model)
    {
        $model->create($request->all());
       return response()->json('Data Berhasil ditambah',200);
    }

    public function updateapi(Request $request, $part_number)
    {
        $produk = Produk::findOrFail($part_number);
        $produk->update($request->all());
        return response()->json('Data Berhasil diubah',200);
    }

    public function showapi($part_number)
    {
        return response()->json(Produk::findOrFail($part_number),200);
    }

    public function deleteapi(Request $request, $part_number)
    {
        $produk = Produk::findOrFail($part_number);
        $produk->delete();
       return response()->json('Data Berhasil dihapus',200);
    }
}
