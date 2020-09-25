<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\KabupatenModel;
use Illuminate\Http\Request;

class KabupatenController extends Controller
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
        $kabupaten = KabupatenModel::
        join('wil_provinsi', 'wil_kabupaten.provinsi_id', '=', 'wil_provinsi.kode_wilayah')
        ->select('wil_kabupaten.*', 'wil_provinsi.nama_provinsi')
        ->paginate(5);
        $dataMasterWilayah = 'active';
        return view('admin/kabupaten/index', compact('kabupaten', 'dataMasterWilayah'));
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
     * @param  \App\KabupatenModel  $kabupatenModel
     * @return \Illuminate\Http\Response
     */
    public function show(KabupatenModel $kabupatenModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KabupatenModel  $kabupatenModel
     * @return \Illuminate\Http\Response
     */
    public function edit(KabupatenModel $kabupatenModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KabupatenModel  $kabupatenModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KabupatenModel $kabupatenModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KabupatenModel  $kabupatenModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(KabupatenModel $kabupatenModel)
    {
        //
    }
}
