@extends('layouts.app') 
@section('content') 
@include('sweetalert::alert') 


<div class="d-sm-flex align-items-center justify-content-between mb-4"> 
    <h1 class="h3 mb-0 mt-4 text-gray-800">Data Karyawan</h1>
</div> <hr> 
<div class="card-header py-3" align="right"> 
    <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#modal-add"> 
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Karyawan
    </button> 
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4"> 
    <div class="card-body"> 
        <div class="table-responsive"> 
            <table class="table table-bordered table-striped"  id="dataTable" width="100%" cellspacing="0">
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
                        <td>Rp. {{ number_format($kry->gapok)}}</td> 
                        <td>{{ $kry->tgl_masuk}}</td> 
                        <td align="center">
                            <a href="/karyawan/detail/show/{{ $kry->nik }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"> 
                            <!-- <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#modal-add"> -->
                                <i class="fas fa-edit fa-sm text-white-50"></i> Detail
                            <!-- </button>  -->
                            </a>
                            <a href="/karyawan/destroy/{{$kry->nik}}" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"> 
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
                <input type="text" name="nik" id="addnik" class="form-control">
        </div>
             
        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Nama</label>
        <div class="col-lg-20">
            <input type="text" name="nm_karyawan" id="addnmkry" class="form-control">
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Tempat lahir</label>
        <div class="col-lg-20">
            <input type="text" name="tmpt_lahir" id="tmptlahir" class="form-control">
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Tanggal lahir</label>
        <div class="col-lg-20">
            <input type="date" name="tgl_lahir" id="tglahir" class="form-control">
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Jenis Kelamin</label>
        <div class="col-lg-20">
            <input type="radio" name="jns_kelamin" id="gender" value="L" > Pria
            <input type="radio" name="jns_kelamin" id="gender" value="P" > Wanita
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Alamat</label>
        <div class="col-lg-20">
            <input type="text" name="alamat" id="alamat" class="form-control">
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Tanggal Masuk</label>
        <div class="col-lg-20">
            <input type="date" name="tgl_masuk" id="tgmasuk" class="form-control">
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">No. Rekening</label>
        <div class="col-lg-20">
            <input type="text" name="no_rekening" id="norek" class="form-control">
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Gaji Pokok</label>
        <div class="col-lg-20">
            <input type="text" name="gapok" id="gapok" class="form-control">
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Jabatan</label>
        <div class="col-lg-20">
            <input type="text" name="jabatan" id="jabatan" class="form-control">
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Pendidikan</label>
        <div class="col-lg-20">
        <select id="pendidikan" name="pendidikan" class="form-control" required> 
                <option value="">--Pilih Pendidikan--</option> 
                <option value="SMA">SMA</option> 
                <option value="D3">Diploma</option> 
                <option value="S1">Sarjana</option>
                <option value="S2">Magister</option>
                <option value="S3">Doktor</option>
            </select>
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