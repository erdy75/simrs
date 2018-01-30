<?php

namespace App\Http\Controllers;

use App\UnitKerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $unit_kerja = UnitKerja::orderBy('id','DESC')->paginate(10);

        return view('unit_kerjas.index',compact('unit_kerja'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unit_kerjas.create');
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

            'unit_kerja' => 'required',
            'keterangan' => 'required',

        ]);


        UnitKerja::create($request->all());


        return redirect()->route('unit_kerja.index')

                        ->with('success','Unit Kerja baru berhasil ditambahkan!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $unit_kerja = UnitKerja::find($id);

        return view('unit_kerjas.show',compact('unit_kerja'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $unit_kerja = UnitKerja::find($id);

        return view('unit_kerjas.edit',compact('unit_kerja'));

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
        $this->validate($request, [

            'unit_kerja' => 'required',
            'keterangan' => 'required',

        ]);


        UnitKerja::find($id)->update($request->all());


        return redirect()->route('unit_kerja.index')

                        ->with('success','Unit Kerja berhasil di update!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UnitKerja::find($id)->delete();

        return redirect()->route('unit_kerja.index')

                        ->with('success','Unit Kerja berhasil di hapus!!!');
    }
}
