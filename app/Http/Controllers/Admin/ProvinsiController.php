<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ProvinsiModel;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
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
        $provinsi = ProvinsiModel::paginate(5);
        $dataMasterWilayah = 'active';
        return view('admin/provinsi/index', compact('provinsi', 'dataMasterWilayah'));
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
     * @param  \App\ProvinsiModel  $provinsiModel
     * @return \Illuminate\Http\Response
     */
    public function show(ProvinsiModel $provinsiModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProvinsiModel  $provinsiModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ProvinsiModel $provinsiModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProvinsiModel  $provinsiModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProvinsiModel $provinsiModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProvinsiModel  $provinsiModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProvinsiModel $provinsiModel)
    {
        //
    }
}
