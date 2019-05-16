<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\modelOrder;
use App\modelKatalog;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //with mengambil fungsi dr model, when buat search
        $dataorder = modelOrder::with(['get_katalog'])->when($request->keyword, function ($query) use ($request) {
            $query->where('atasnama', 'like', "%{$request->keyword}%");
            })->get();
        //return data ke view
        return view('dashboard.order', compact('dataorder'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $dataa = modelKatalog::all();
        return view('crudorder.createorder', compact('dataa'));
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
        modelOrder::insert([
            'id_order' => $request->id_order,
            'atasnama' => $request->atasnama,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
            'idkatalog_fk' => $request->idkatalog_fk,
            'jumlah' => $request->jumlah,
            'tgl_order' => $request->tgl_order,
            'tgl_ambil' => $request->tgl_ambil,
            'harga_satuan' => $request->harga_satuan,
            'harga_total' => $request->harga_total,
            'statustransaksi' => $request->statustransaksi
          ]);

        return redirect('order');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_order)
    {
        //
        $dataa = modelKatalog::all();
        return view('crudorder.createorder', compact('dataa'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_order)
    {
        //
        $dataaa = modelKatalog::all();
        $dataorder = modelOrder::where('id_order',$id_order)->get();
        return view('crudorder.editorder', compact('dataorder','dataaa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_order)
    {
        //
        modelOrder::where('id_order',$id_order)->update([
            'id_order' => $request->id_order,
            'atasnama' => $request->atasnama,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
            'idkatalog_fk' => $request->idkatalog_fk,
            'jumlah' => $request->jumlah,
            'tgl_order' => $request->tgl_order,
            'tgl_ambil' => $request->tgl_ambil,
            'harga_satuan' => $request->harga_satuan,
            'harga_total' => $request->harga_total,
            'statustransaksi' => $request->statustransaksi
        ]);
        return redirect('order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_order)
    {
        //
       modelOrder::where('id_order', $id_order)->delete();
        return redirect('order');
    }
}

