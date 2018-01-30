<?php

namespace App\Http\Controllers;

use Excel;
use App\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $complaints = Complaint::orderBy('id','DESC')->paginate(5);

        return view('complaints.index',compact('complaints'))

            ->with('i', ($request->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('complaints.create');
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

            'nama' => 'required',
            'no_hp' => 'required',
            'tanggal' => 'required',
            'alamat' => 'required',
            'kritik_saran' => 'required',

        ]);


        Complaint::create($request->all());


        return redirect()->route('complaint.index')

                        ->with('success','Kritik saran berhasil ditambahkan!!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $complaints = Complaint::find($id);

        return view('complaints.show',compact('complaints'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $complaints = Complaint::find($id);

        return view('complaints.edit',compact('complaints'));
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

            'nama' => 'required',
            'no_hp' => 'required',
            'tanggal' => 'required',
            'alamat' => 'required',
            'kritik_saran' => 'required',

        ]);


        Complaint::find($id)->update($request->all());


        return redirect()->route('complaint.index')

                        ->with('success','Kritik saran berhasil di hapus!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Complaint::find($id)->delete();

        return redirect()->route('complaint.index')

                        ->with('success','Kritik saran berhasil dihapus');

    }

    public function laporanComplaint(Request $request)
    {
         $complaints = Complaint::orderBy('id','DESC')->paginate(10);

        return view('complaints.laporan',compact('complaints'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function downloadComplaint()
    {
        $complaints = Complaint::select('nama', 'no_hp', 'tanggal', 'alamat', 'kritik_saran')->get();
        return Excel::create('datakomplain', function($excel) use ($complaints){
            $excel->sheet('mysheet', function($sheet) use($complaints){
                $sheet->fromArray($complaints);
            });
        })->download('xls');
    }
}
