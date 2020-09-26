<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\KelurahanModel;
use Illuminate\Http\Request;

class KelurahanController extends Controller
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
        $kelurahan = KelurahanModel::
        join('wil_kecamatan', 'wil_kelurahan.kecamatan_id', '=', 'wil_kecamatan.kode_kec')
        ->select('wil_kelurahan.*', 'wil_kecamatan.nama_kecamatan')
        ->paginate(10);
        $dataMasterWilayah = 'active';
        return view('admin/kelurahan/index', compact('kelurahan', 'dataMasterWilayah'));
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
     * @param  \App\KelurahanModel  $kelurahanModel
     * @return \Illuminate\Http\Response
     */
    public function show(KelurahanModel $kelurahanModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KelurahanModel  $kelurahanModel
     * @return \Illuminate\Http\Response
     */
    public function edit(KelurahanModel $kelurahanModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KelurahanModel  $kelurahanModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KelurahanModel $kelurahanModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KelurahanModel  $kelurahanModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(KelurahanModel $kelurahanModel)
    {
        //
    }
}
