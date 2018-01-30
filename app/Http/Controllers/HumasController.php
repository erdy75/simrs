<?php

namespace App\Http\Controllers;

use Excel;
use App\Humas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HumasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $humas = Humas::orderBy('id','DESC')->paginate(10);

        return view('humas.index',compact('humas'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('humas.create');
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

            'surat' => 'required',
            'keterangan' => 'required',
            'tanggal' => 'required',

        ]);


        Humas::create($request->all());


        return redirect()->route('humas.index')

                        ->with('success','Data baru berhasil ditambahkan!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $humas = Humas::find($id);

        return view('humas.show',compact('humas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $humas = Humas::find($id);

        return view('humas.edit',compact('humas'));
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

            'surat' => 'required',
            'keterangan' => 'required',
            'tanggal' => 'required',

        ]);


        Humas::find($id)->update($request->all());


        return redirect()->route('humas.index')

                        ->with('success','Data berhasil di update!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Humas::find($id)->delete();

        return redirect()->route('humas.index')

                        ->with('success','Berhasil menghapus data humas');


    }

    public function laporanHumas(Request $request)
    {
         $humas = Humas::orderBy('id','DESC')->paginate(10);

        return view('humas.laporan',compact('humas'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function downloadHumas()
    {
        $humas = Humas::select('surat', 'tanggal', 'keterangan')->get();
        return Excel::create('datask', function($excel) use ($humas){
            $excel->sheet('mysheet', function($sheet) use($humas){
                $sheet->fromArray($humas);
            });
        })->download('xls');
    }
}
