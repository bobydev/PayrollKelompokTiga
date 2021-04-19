<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Karyawan;
use app\Gaji;
use app\Lembur;
use Alert;

class LemburController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $karyawan = DB::table('karyawan')
                    ->join('lembur', 'karyawan.nik', 'lembur.nik')
                    ->get();
        $lembur = \App\Lembur::All();
        return view ('admin.lembur.lembur', ['lembur' => $lembur, 'karyawan' => $karyawan]);
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
        Lembur::create($request->all());
 
        Alert::success('Pesan ','Data berhasil disimpan'); 
        
        return redirect('/lembur');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nik)
    {
        //
        
        $karyawan = Karyawan::findOrFail($nik);
        $lembur = Lembur::findOrFail($nik);
        $lembur->update($request->all());
        Alert::success('Pesan ','Data lembur berhasil di input!'); 
        return view ('admin.lembur.lembur', ['lembur' => $lembur,'karyawan' => $karyawan]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
