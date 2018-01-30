<?php

namespace App\Http\Controllers;

use App\Cuti;
use Illuminate\Http\Request;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cutis = Cuti::orderBy('id','DESC')->paginate(10);

        return view('cuties.index',compact('cutis'))

            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cuties.create');
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

            'id_karyawan' => 'required',
            'cuti' => 'required',
            'hari' => 'required',
            'id_unit_kerja' => 'required',
            'keterangan' => 'required',

        ]);


        Cuti::create($request->all());


        return redirect()->route('cuti.index')

                        ->with('success','Cuti karyawan berhasil ditambahkan!!!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cuties = Cuti::find($id);

        return view('cuties.show')->withCuties($cuties);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cuties = Cuti::find($id);

        return view('cuties.edit')->withCuties($cuties);
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

            'id_karyawan' => 'required',
            'cuti' => 'required',
            'hari' => 'required',
            'id_unit_kerja' => 'required',
            'keterangan' => 'required',

        ]);


        Cuti::find($id)->update($request->all());


        return redirect()->route('cuti.index')

                        ->with('success','Cuti karyawan berhasil di edit!!!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cuti::find($id)->delete();

        return redirect()->route('cuti.index')->with('success', 'Data cuti berhasil dihapus');


    }
}
