<?php

namespace App\Http\Controllers;

use Alert;
use App\Karyawan;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
        //
        $karyawan = \App\Karyawan::All();
        return view('admin.karyawan.karyawan', ['karyawan' => $karyawan]);
    }

    public function create()
    {
        //
        return view('admin.karyawan.input');
    }

    public function store(Request $request)
    {
        //
        Karyawan::create($request->all());

        Alert::success('Pesan ', 'Data berhasil disimpan');

        return redirect('/karyawan');
    }

    public function show($nik)
    {
        //
        $karyawan_show = \App\Karyawan::findOrFail($nik);
        return view('admin.karyawan.detail', ['karyawan' => $karyawan_show]);
    }

    public function edit(Request $request, $nik)
    {

    }

    public function update(Request $request, $nik)
    {

    }

    public function destroy($nik)
    {
        //
        $karyawan = \App\Karyawan::findOrFail($nik);
        $karyawan->delete();

        Alert::success('Pesan ', 'Data berhasil dihapus');

        return redirect()->route('karyawan.index');
    }

    public function updateKaryawan(Request $request, $nik)
    {
        $karyawan = Karyawan::findOrFail($nik);
        $karyawan->update($request->all());
        Alert::success('Pesan ', 'Data berhasil diubah!');
        return view('admin.karyawan.detail', ['karyawan' => $karyawan]);
    }

    public function getKaryawanByNik($nik)
    {
        $karyawan = Karyawan::findOrFail($nik);
        return response()->json($karyawan);
    }

    public function slipgaji()
    {
        $karyawan = Karyawan::all();
        return view('admin.slip.list', ['karyawan' => $karyawan]);
    }

    public function slipgajiUser()
    {
        $karyawan = Karyawan::where('nm_karyawan', auth()->user()->name)->first();
        return view('list-slip', ['karyawan' => $karyawan]);
    }

    public function cetakSlip($nik)
    {
        $data['slip'] = DB::table('karyawan')
            ->leftJoin('lembur', 'karyawan.nik', 'lembur.nik')
            ->leftJoin('absensi', 'karyawan.nik', 'absensi.nik')
            ->leftJoin('shift', 'absensi.shift', 'shift.kategori')
            ->where('karyawan.nik', $nik)
            ->select('karyawan.nik', 'karyawan.nm_karyawan', 'karyawan.gapok', 'karyawan.jabatan', 'lembur.jam_lembur', 'lembur.uang_lembur', 'lembur.total_gaji', 'shift.jam_masuk', 'shift.jam_keluar')
            ->first();
        $pdf = PDF::loadView('admin.slip.cetak', $data);
        return $pdf->download("slip-{$nik}.pdf");
    }
}