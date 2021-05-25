@extends('layouts.app') 
@section('content') 
@include('sweetalert::alert') 

<div class="d-sm-flex align-items-center justify-content-between mb-4"> 
    <h1 class="h3 mb-0 mt-4 text-gray-800">Data Lembur Karyawan</h1>
</div> <hr> 

<div class="card-header py-3" align="right"> 
    <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#modal_add"> 
        <i class="fas fa-plus fa-sm text-white-50"></i> Entry jam lembur
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
                        <th>Total Jam Lembur</th>
                        <th>Total Gaji</th>
                        <th>Opsi</th>
                        </tr>                 
                </thead>
                <tbody>
                @foreach($karyawan as $kry) 
                    <tr align="center"> 
                        <td>{{ $kry->nik}}</td> 
                        <td>{{ $kry->nm_karyawan}}</td> 
                        <td>{{ $kry->jam_lembur}}</td>
                        <td>Rp. {{ number_format($kry->total_gaji)}}</td>  
                        <td align="center"> 
                            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm" data-toggle="modal" data-target="#modal-add<?= $kry->nik ?>">
                                <i class="fas fa-edit fa-sm text-white-50"></i> Sunting jam lembur
                            </button> 
                        </td> 
                    </tr>
                @endforeach
                </tbody> 
            </table> 
        </div> 
    </div> 
</div>
@endsection

@section('modal')
@foreach($karyawan as $kry) 
<!-- Modal -->
<div class="modal fade" id="modal-add<?= $kry->nik ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sunting Data Lembur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label class="col-lg-20 control-label">NIK</label>
            <div class="col-lg-20">
                <input type="text" name="nik" id="addnik" class="form-control" value="<?= "$kry->nik"; ?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Nama</label>
            <div class="col-lg-20">
                <input type="text" name="nm_karyawan" id="addnmkry" class="form-control" value="<?= "$kry->nm_karyawan"; ?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Uang Lembur</label>
            <div class="col-lg-20">
                <input type="number" name="uang_lembur" id="uLembur" class="form-control" readonly onkeyup="sum();" placeholder="0">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Total Gaji</label>
            <div class="col-lg-20">
                <input type="number" name="total_gaji" id="totGaji" class="form-control" readonly placeholder="0">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Jam Lembur</label>
            <div class="col-lg-20">
                <input type="number" name="jam_lembur" id="jLembur" class="form-control" value="<?= "$kry->jam_lembur"; ?>" onkeyup="sum();">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Waktu Lembur</label>
            <div class="col-lg-20">
                <input type="datetime-local" name="tgl_lembur" id="tgLembur"  class="form-control" value="<?= "$kry->tgl_lembur"; ?>">
            </div>
        </div>
        
      </div>
      <div class="modal-footer"> 
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button> 
        <input type="submit" class="btn btn-primary btn-send" value="Simpan">
      </div> 
        <script>
            function sum() {
                var jamLembur = document.getElementById('jLembur').value;
                // var uangLembur = document.getElementById('uLembur').value;
                var result = parseFloat(jamLembur) * 30000;
                    if (!isNaN(result)) {
                        document.getElementById('uLembur').value = result;
                    }

                var total_gaji = document.getElementById('uLembur').value;
                var hasil =parseFloat(total_gaji) + {{ $kry->gapok }};
                    if (!isNaN(hasil)) {
                        document.getElementById('totGaji').value = hasil;
                    }
            }
        </script>
    </div>
  </div>
</div>
@endforeach
@endsection

@section('entry')
@foreach($employee as $emp) 
<!-- Modal -->
<div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Entry Data Lembur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label class="col-lg-20 control-label">NIK</label>
            <div class="col-lg-20">
            <select id="nik" name="nik[]" class="form-control" required> 
                <option value="">--Pilih NIK--</option> 
                @foreach ($employee as $emp)
                <option value="{{ $emp->nik}}">{{ $emp->nik }} - {{ $emp->nm_karyawan }}</option> 
                @endforeach
            </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Nama</label>
            <div class="col-lg-20">
            <select id="nm_karyawan" name="nm_karyawan" class="form-control" required> 
                <option value="">--Pilih Nama--</option> 
                @foreach ($employee as $emp)
                <option value="{{ $emp->nm_karyawan}}">{{ $emp->nm_karyawan }}</option> 
                @endforeach
            </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-15 mt-2 control-label">Uang Lembur</label>
            <div class="col-lg-15">
                <input type="number" name="uang_lembur" id="uLembur" class="form-control" readonly onkeyup="sum();" placeholder="0">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Total Gaji</label>
            <div class="col-lg-20">
                <input type="number" name="total_gaji" id="totGaji" class="form-control" readonly placeholder="0">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Jam Lembur</label>
            <div class="col-lg-20">
                <input type="number" name="jam_lembur" id="jLembur" class="form-control"  onkeyup="sum();">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-20 mt-2 control-label">Waktu Lembur</label>
            <div class="col-lg-20">
                <input type="datetime-local" name="tgl_lembur" id="tgLembur"  class="form-control" value="<?= "$kry->tgl_lembur"; ?>">
            </div>
        </div>
        
      </div>
      <div class="modal-footer"> 
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button> 
        <input type="submit" class="btn btn-primary btn-send" value="Simpan">
      </div> 
        <script>
            function sum() {
                var jamLembur = document.getElementById('jLembur').value;
                // var uangLembur = document.getElementById('uLembur').value;
                var result = parseFloat(jamLembur) * 30000;
                    if (!isNaN(result)) {
                        document.getElementById('uLembur').value = result;
                    }

                var total_gaji = document.getElementById('uLembur').value;
                var hasil =parseFloat(total_gaji) + {{ $kry->gapok }};
                    if (!isNaN(hasil)) {
                        document.getElementById('totGaji').value = hasil;
                    }
            }
        </script>
    </div>
  </div>
</div>
@endforeach
@endsection


