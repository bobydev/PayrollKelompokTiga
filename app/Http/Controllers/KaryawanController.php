<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Alert;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $karyawan = \App\Karyawan::All();
        return view('admin.karyawan.karyawan', ['karyawan' => $karyawan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin.karyawan.input');
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
        $tambah_karyawan = new \App\Karyawan; 
        $tambah_karyawan->nik = $request->addnik; 
        $tambah_karyawan->nm_karyawan = $request->addnmkry; 
        $tambah_karyawan->tmpt_lahir = $request->tmptlahir; 
        $tambah_karyawan->tgl_lahir = $request->tglahir; 
        $tambah_karyawan->jns_kelamin = $request->gender;
        $tambah_karyawan->alamat = $request->alamat;
        $tambah_karyawan->tgl_masuk = $request->tgmasuk;
        $tambah_karyawan->no_rekening = $request->norek;
        $tambah_karyawan->gapok = $request->gapok;
        $tambah_karyawan->jabatan = $request->jabatan;
        $tambah_karyawan->pendidikan = $request->pendidikan;
        $tambah_karyawan->save(); 
        
        Alert::success('Pesan ','Data berhasil disimpan'); 
        
        return redirect('/karyawan');
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
    public function destroy($nik)
    {
        //
        $karyawan = \App\Karyawan::findOrFail($nik); 
        $karyawan->delete(); 
        
        Alert::success('Pesan ','Data berhasil dihapus'); 
        
        return redirect()->route('karyawan.index');
    }
}
