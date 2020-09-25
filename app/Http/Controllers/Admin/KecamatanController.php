<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\KecamatanModel;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $kecamatan = KecamatanModel::
        join('wil_kabupaten', 'wil_kecamatan.kabupaten_id', '=', 'wil_kabupaten.kode_kabkot')
        ->join('wil_provinsi', 'wil_kabupaten.provinsi_id', '=', 'wil_provinsi.kode_wilayah')
        ->select('wil_kecamatan.*', 'wil_provinsi.nama_provinsi', 'wil_kabupaten.nama_kabkot')
        ->paginate(10);
        $dataMasterWilayah = 'active';
        return view('admin/kecamatan/index', compact('kecamatan', 'dataMasterWilayah'));
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
     * @param  \App\KecamatanModel  $kecamatanModel
     * @return \Illuminate\Http\Response
     */
    public function show(KecamatanModel $kecamatanModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KecamatanModel  $kecamatanModel
     * @return \Illuminate\Http\Response
     */
    public function edit(KecamatanModel $kecamatanModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KecamatanModel  $kecamatanModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KecamatanModel $kecamatanModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KecamatanModel  $kecamatanModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(KecamatanModel $kecamatanModel)
    {
        //
    }
}
