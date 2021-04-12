@extends('layouts.app') 
@section('content') 
@include('sweetalert::alert') 

@csrf

<div class="d-sm-flex align-items-center justify-content-between mb-4"> 
    <h1 class="h3 mb-0 mt-4 text-gray-800">Data Karyawan</h1>
</div> <hr> 
<div class="card-header py-3" align="right"> 
    <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#modal-edit"> 
        <i class="fas fa-edit fa-sm text-white-50"></i> Edit Profil
    </button> 
</div>

<div class="row mt-4">
    <div class="col-xl-3">
        <div class="card mb-4">
            <div class="card-header">
                <i class=""></i>
                    Foto Profil
                </div>
            <div class="card-body"><img src="{{ asset('asset/img/avatar5.png') }}" width='205'/></div>
        </div>
    </div>
    
    <div class="col-xl-9">
        <div class="card mb-4">
            <div class="card-header">
                <i class=""></i>
                    Profil Karyawan
                </div>
            <div class="card-body">
            <table class="table table-bordered"> 
                <tr>
	                <td>NIK</td>
                    <td>{{ $karyawan->nik }}</td>
	            </tr>
	            <tr>
	                <td>Nama Karyawan</td>
                    <td>{{ $karyawan->nm_karyawan }}</td>
	            </tr>
	            <tr>
	                <td>Tempat Lahir</td>
                    <td>{{ $karyawan->tmpt_lahir }}</td>
	            </tr>
	            <tr>
	                <td>Tanggal Lahir</td>
                    <td>{{ $karyawan->tgl_lahir }}</td>
	            </tr>
	            <tr>
	                <td>Jenis Kelamin</td>
                    <td>{{ $karyawan->jns_kelamin }}</td>
                </tr>
            	<tr>
	                <td>Alamat</td>
                    <td>{{ $karyawan->alamat }}</td>
	            </tr>
            	<tr>
	                <td>Tanggal Masuk</td>
                    <td>{{ $karyawan->tgl_masuk }}</td>
	            </tr>
	            <tr>
	                <td>Gaji Pokok</td>
                    <td>Rp. {{ number_format($karyawan->gapok) }}</td>
	            </tr>
	            <tr>
	                <td>Jabatan</td>
                    <td>{{ $karyawan->jabatan }}</td>
	            </tr>
                <tr>
	                <td>Pendidikan</td>
                    <td>{{ $karyawan->pendidikan }}</td>
	            </tr>              
            </table>
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal fade" id="modal-edit" tabindex="-1" role="dialog" aria-hidden="true"> 
    <div class="modal-dialog modal-xs"> 
    <form action="{{route('updateKaryawan', $karyawan->nik) }}" method="GET"> 
        @csrf
        <div class="modal-content"> 
        <div class="modal-header"> 
            <h4 class="modal-title">Edit Data Karyawan</h4> 
        </div>

        <div class="modal-body"> 
            <div class="form-group">
                <label class="col-lg-20 control-label">NIK</label>
            <div class="col-lg-20">
                <input type="text" name="nik" id="addnik" value="{{$karyawan->nik}}" class="form-control">
        </div>
             
        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Nama</label>
        <div class="col-lg-20">
            <input type="text" name="nm_karyawan" id="addnmkry" value="{{$karyawan->nm_karyawan}}" class="form-control">
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Tempat lahir</label>
        <div class="col-lg-20">
            <input type="text" name="tmpt_lahir" value="{{$karyawan->tmpt_lahir}}" id="tmptlahir" class="form-control">
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Tanggal lahir</label>
        <div class="col-lg-20">
            <input type="date" name="tgl_lahir" value="{{$karyawan->tgl_lahir}}" id="tglahir" class="form-control">
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Jenis Kelamin</label>
        <div class="col-lg-20">
            <input type="radio" name="jns_kelamin" id="gender" value="L" <?php if($karyawan['jns_kelamin']=='L') echo 'checked'?>> Pria
            <input type="radio" name="jns_kelamin" id="gender" value="P" <?php if($karyawan['jns_kelamin']=='P') echo 'checked'?> > Wanita
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Alamat</label>
        <div class="col-lg-20">
            <input type="text" name="alamat" value="<?= $karyawan->alamat ?>" id="alamat" class="form-control">
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Tanggal Masuk</label>
        <div class="col-lg-20">
            <input type="date" value="<?= $karyawan->tgl_masuk ?>" name="tgl_masuk" id="tgmasuk" class="form-control">
        </div>
        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">No. Rekening</label>
        <div class="col-lg-20">
            <input type="number" name="no_rekening" value="<?= $karyawan->no_rekening ?>" id="norek" class="form-control">
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Gaji Pokok</label>
        <div class="col-lg-20">
            <input type="number" name="gapok" value="<?= $karyawan->gapok ?>" id="gapok" class="form-control">
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Jabatan</label>
        <div class="col-lg-20">
            <input type="text" name="jabatan" value="<?= $karyawan->jabatan ?>" id="jabatan" class="form-control">
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Pendidikan</label>
        <div class="col-lg-20">
        <select id="pendidikan" name="pendidikan" class="form-control" > 
                <option value="<?= $karyawan->pendidikan ?>"><?php echo $karyawan['pendidikan'];?></option> 
                <option value="SMA">SMA</option> 
                <option value="D3">D3</option> 
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
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