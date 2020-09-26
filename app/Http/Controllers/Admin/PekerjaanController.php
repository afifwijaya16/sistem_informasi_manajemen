<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PekerjaanModel;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
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
        $pekerjaan = PekerjaanModel::paginate(5);
        $dataMaster = 'active';
        return view('admin/pekerjaan/index', compact('pekerjaan', 'dataMaster'));
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
        $pekerjaan = PekerjaanModel::create([
            'pekerjaan' => $request->pekerjaan,
        ]);
        
        return redirect()->route('pekerjaan.index')->with('status', 'Add Data pekerjaan Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PekerjaanModel  $pekerjaanModel
     * @return \Illuminate\Http\Response
     */
    public function show(PekerjaanModel $pekerjaanModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PekerjaanModel  $pekerjaanModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PekerjaanModel $pekerjaanModel)
    {
        //
    }

    public function perbarui(Request $request)
    {
        // $this->validate($request, [
        //     'pekerjaan' => 'required|min:3'
        // ]);
        $id = $request->id;
        $pekerjaan_data = [
            'pekerjaan' => $request->pekerjaan,
        ];

        PekerjaanModel::whereId($id)->update($pekerjaan_data);

        return redirect()->route('pekerjaan.index')->with('status', 'Update Data pekerjaan Success');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PekerjaanModel  $pekerjaanModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PekerjaanModel $pekerjaanModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PekerjaanModel  $pekerjaanModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pekerjaan = PekerjaanModel::findorfail($id);
        $pekerjaan->delete();
        return redirect()->route('pekerjaan.index')->with('status', 'Delete Data pekerjaan Success');
    }

    public function search(request $request) {
        $pekerjaan = PekerjaanModel::Where('pekerjaan', 'like', '%'.$request->search.'%')->paginate(5);
        $pekerjaan->appends(['search' => $request->search]);
        $dataMaster = 'active';
        return view('admin/pekerjaan/index', compact('pekerjaan', 'dataMaster'));
    }
}
