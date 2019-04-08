<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\modelKatalog;

class KatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //mendefinisikan kata kunci
        $cari = $request->q;
        //mencari data di database
        $datakatalog = DB::table('katalog')
        ->where('namamenu','like',"%".$cari."%")
        ->paginate();
        //return data ke view
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
        return view('crudkatalog.createkatalog');
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
        return view('crudkatalog.createkatalog');

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
        $datakatalog = DB::table('katalog')->where('idkatalog',$idkatalog)->get();
        return view('crudkatalog.editkatalog', compact('datakatalog'));
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

