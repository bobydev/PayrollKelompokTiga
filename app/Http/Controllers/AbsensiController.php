<?php

namespace App\Http\Controllers;

use App\Absensi;
use App\Karyawan;
use App\Shift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shifts = Shift::all();
        $absensi = \App\Absensi::All();
        $karyawan = Karyawan::all();
        $data = DB::table('absensi')
            ->join('karyawan', 'absensi.nik', 'karyawan.nik')
            ->join('shift', 'absensi.shift', 'shift.kategori')
            ->select('karyawan.nik', 'karyawan.nm_karyawan', 'absensi.tgl_hadir', 'shift.jam_masuk', 'shift.jam_keluar')
            ->get();
        return view('admin.absensi.absensi', ['absensi' => $absensi, 'shifts' => $shifts, 'karyawan' => $karyawan, 'data' => $data]);
    }

    public function store(Request $request)
    {
        Absensi::create($request->all());
        return redirect()->route('absensi.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $nik)
    {
        $data = Absensi::where('nik', $nik);
        $data->update([
            'nik' => $request->nik,
            'shift' => $request->shift,
        ]);
        return redirect()->route('absensi.index');
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