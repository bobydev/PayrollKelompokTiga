<?php

namespace App\Http\Controllers;

use Alert;
use app\Karyawan;
use App\Lembur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $employee = \App\Karyawan::All();
        $karyawan = DB::table('karyawan')
            ->join('lembur', 'karyawan.nik', 'lembur.nik')
            ->get();
        $lembur = \App\Lembur::All();
        return view('admin.lembur.lembur', ['lembur' => $lembur, 'karyawan' => $karyawan, 'employee' => $employee]);

        $bulan = array(1 => 'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember',
        );
        $split = explode('-', $tanggal);
        return $split[2] . ' ' . $bulan[(int) $split[1]] . ' ' . $split[0];
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
        Lembur::create($request->all());

        Alert::success('Pesan ', 'Data berhasil disimpan');

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
        $lembur = Lembur::where('nik', $nik);
        $lembur->update([
            'jam_lembur' => $request->jam_lembur,
            'uang_lembur' => $request->uang_lembur,
            'tgl_lembur' => $request->tgl_lembur,
            'total_gaji' => $request->total_gaji,
        ]);
        Alert::success('Pesan ', 'Data lembur berhasil di input!');
        return redirect()->route('lembur.index');
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