<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $karyawans = Karyawan::orderBy('id','DESC')->paginate(10);

        return view('karyawans.index',compact('karyawans'))

            ->with('i', ($request->input('page', 1) - 1) * 10);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawans.create');
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

            'nama_karyawan' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'no_hp' => 'required',
            'id_unit_kerja' => 'required',
            'alamat' => 'required',

        ]);


        Karyawan::create($request->all());


        return redirect()->route('karyawan.index')

                        ->with('success','Data karyawan berhasil ditambahkan!!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = Karyawan::find($id);

        return view('karyawans.show',compact('karyawan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $karyawan = Karyawan::find($id);

        return view('karyawans.edit',compact('karyawan'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Karyawan::find($id)->delete();

        return redirect()->route('karyawan.index')

                        ->with('success','Data karyawan berhasil dihapus!!!');


    }
}
