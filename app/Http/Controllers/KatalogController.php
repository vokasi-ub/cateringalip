<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\modelKatalog;
use App\modelKategori;
class KatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // //mendefinisikan kata kunci
        // $cari = $request->q;
        // //mencari data di database
        // $datakatalog = DB::table('katalog')
        // ->where('namamenu','like',"%".$cari."%")
        // ->paginate();
        // //return data ke view

        //with mengambil fungsi dr model, when buat search
        $datakatalog = modelKatalog::with(['get_kategori'])->when($request->keyword, function ($query) use ($request) {
            $query->where('namamenu', 'like', "%{$request->keyword}%");
            })->get();
        return view('dashboard.katalog', compact('datakatalog'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = modelKategori::all();
        return view('crudkatalog.createkatalog', compact('data'));
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
        DB::table('katalog')->insert([
            'idkatalog' => $request->idkatalog,
            'idkategori_fk' => $request->idkategori_fk, 
            'namamenu' => $request->namamenu,
            'pict' => $request->pict,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga
          ]);

        return redirect('katalog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idkatalog)
    {
        //
       
        $data = modelKategori::all();
        return view('crudkatalog.createkatalog', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idkatalog)
    {
        //
        $jenis = modelKategori::all();
        $datakatalog = DB::table('katalog')->where('idkatalog',$idkatalog)->get();
        return view('crudkatalog.editkatalog', compact('datakatalog','jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idkatalog)
    {
        //
        DB::table('katalog')->where('idkatalog',$idkatalog)->update([
           
            'idkatalog' => $request->idkatalog,
            'idkategori_fk' => $request->idkategori_fk,
            'namamenu' => $request->namamenu,
            'pict' => $request->pict,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga
        ]);
        return redirect('katalog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idkatalog)
    {
        //
        DB::table('katalog')->where('idkatalog', $idkatalog)->delete();
        return redirect('katalog');
    }
}

