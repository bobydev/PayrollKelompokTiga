@extends('layouts.app') 
@section('content') 
@include('sweetalert::alert') 

<div class="d-sm-flex align-items-center justify-content-between mb-4"> 
    <h1 class="h3 mb-0 mt-4 text-gray-800">Data Karyawan</h1>
</div> <hr> 
<div class="card-header py-3" align="right"> 
    <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#modal-add"> 
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Karyawan
    </button> 
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4"> 
    <div class="card-body"> 
        <div class="table-responsive"> 
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark"> 
                    <tr align="center"> 
                        <th>NIK</th> 
                        <th>Nama</th> 
                        <th>No. Rekening</th>
                        <th>Jabatan</th> 
                        <th>Gaji Pokok</th> 
                        <th>Tgl. Masuk</th>
                        <th>Opsi</th>
                    </tr>                 
                </thead>
                <tbody>
                @foreach($karyawan as $kry) 
                    <tr align="center"> 
                        <td>{{ $kry->nik}}</td> 
                        <td>{{ $kry->nm_karyawan}}</td> 
                        <td>{{ $kry->no_rekening}}</td>
                        <td>{{ $kry->jabatan }}</td>
                        <td>{{ number_format($kry->gapok)}}</td> 
                        <td>{{ $kry->tgl_masuk}}</td> 
                        <td align="center">
                            <a href="{{ route('karyawan.edit',[$kry->nik])}}"class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"> 
                            <!-- <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#modal-add"> -->
                                <i class="fas fa-edit fa-sm text-white-50"></i> Detail
                            <!-- </button>  -->
                            </a>
                            <a href="/karyawan/hapus/{{$kry->nik}}" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"> 
                                <i class="fas fa-trash-alt fa-sm text-white-50"></i> Hapus
                            </a> 
                        </td> 
                    </tr>
                @endforeach
                </tbody> 
            </table> 
        </div> 
    </div> 
</div>

<div class="modal inmodal fade" id="modal-add" tabindex="-1" role="dialog" aria-hidden="true"> 
    <div class="modal-dialog modal-xs"> 
 
    <form action="{{ action('KaryawanController@store') }}" method="POST"> 
        @csrf

        <div class="modal-content"> 
        <div class="modal-header"> 
            <h4 class="modal-title">Tambah Data Karyawan</h4> 
        </div>

        <div class="modal-body"> 
            <div class="form-group">
                <label class="col-lg-20 control-label">NIK</label>
            <div class="col-lg-20">
                <input type="text" name="addkdbrg" id="addkdbrg" class="form-control">
        </div>
             
        <div class="form-group">
            <label class="col-lg-20 control-label">Nama</label>
        <div class="col-lg-20">
            <input type="text" name="addnmbrg" id="addnmbrg" class="form-control">
        </div>

        <div class="form-group">
            <label class="col-lg-20 control-label">No. Rekening</label>
        <div class="col-lg-20">
            <input type="number" name="addharga" id="addharga" class="form-control">
        </div>

        <div class="form-group">
            <label class="col-lg-20 control-label">Jabatan</label>
        <div class="col-lg-20">
            <input type="number" name="addstok" id="addstok" class="form-control">
        </div>

    </div> 
                </div> 
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button> 
                    <input type="submit" class="btn btn-primary btn-send" value="Simpan">
                </div> 
                @endsection
            </div>
        </form> 
    </div> 
</div> 
