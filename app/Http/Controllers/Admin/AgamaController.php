<?php

namespace App\Http\Controllers\Admin;

use App\AgamaModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $agama = AgamaModel::paginate(10);
        $agama = AgamaModel::all();
        return view('admin/agama/index', compact('agama'));
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
        $this->validate($request, [
            'agama' => 'required|min:1'
        ]);
        $agama = AgamaModel::create([
            'agama' => $request->agama,
        ]);
        return redirect()->route('agama.index')->with('status', 'Add Data agama Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AgamaModel  $agamaModel
     * @return \Illuminate\Http\Response
     */
    public function show(AgamaModel $agamaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AgamaModel  $agamaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(AgamaModel $agamaModel)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AgamaModel  $agamaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AgamaModel $agamaModel)
    {
        $this->validate($request, [
            'agama' => 'required|min:3'
        ]);

        $agama_data = [
            'agama' => $request->agama,
        ];

        AgamaModel::whereId($id)->update($agama_data);

        return redirect()->route('agama.index')->with('status', 'Update Data agama Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AgamaModel  $agamaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgamaModel $agamaModel)
    {
        $agama = AgamaModel::findorfail($id);
        $agama->delete();
        return redirect()->route('agama.index')->with('status', 'Delete Data agama Success');
    }
}
