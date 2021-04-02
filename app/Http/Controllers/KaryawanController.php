<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Karyawan;
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
        Karyawan::create($request->all());

        Alert::success('Pesan ','Data berhasil disimpan'); 
        
        return redirect('/karyawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nik)
    {
        //
        $karyawan_show = \App\Karyawan::findOrFail($nik);
        return view ('admin.karyawan.detail', ['karyawan' => $karyawan_show]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $nik)
    {
        
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

    }

    public function destroy($nik)
    {
        //
        $karyawan = \App\Karyawan::findOrFail($nik); 
        $karyawan->delete(); 
        
        Alert::success('Pesan ','Data berhasil dihapus'); 
        
        return redirect()->route('karyawan.index');
    }

    public function updateKaryawan(Request $request, $nik)
    {
        $karyawan = Karyawan::findOrFail($nik);
        $karyawan->update($request->all());
        Alert::success('Pesan ','Data berhasil diubah!'); 
        return view ('admin.karyawan.detail', ['karyawan' => $karyawan]);
    }
}
