@extends('layouts.app') 
@section('content') 
@include('sweetalert::alert') 

<div class="d-sm-flex align-items-center justify-content-between mb-4"> 
    <h1 class="h3 mb-0 mt-4 text-gray-800">Data Kehadiran Karyawan</h1>
</div> <hr> 

<div class="d-sm-flex align-items-center justify-content-between mb-4"> 
    <div class="card-body"> 
        <div class="table-responsive"> 
            <button class="btn btn-info mb-2" data-toggle="modal" data-target="#staticBackdrop">Entry Absen</button>
            <table class="table table-bordered table-striped"  id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark"> 
                    <tr align="center"> 
                        <th>NIK</th> 
                        <th>Nama</th> 
                        <th>Tanggal Masuk</th>
                        <th>Jam Masuk</th> 
                        <th>Jam Keluar</th> 
                        <th>Opsi</th>
                        </tr>                 
                </thead>
                <tbody>
                @foreach ($data as $d)
                    <tr align = "center">
                        <td><?= $d->nik ?></td>
                        <td><?= $d->nm_karyawan ?></td>
                        <td><?= $d->tgl_hadir ?></td>
                        <td><?= $d->jam_masuk ?></td>
                        <td><?= $d->jam_keluar ?></td>
                        <td align = "center">
                            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#modal-edit">
                                <i class="fas fa-edit fa-sm text-white-50"></i> Edit absensi
                            </button>
                            {{-- <a href="#" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"> 
                                <i class="fas fa-trash-alt fa-sm text-white-50"></i> Hapus
                            </a>  --}}
                        </td>
                    </tr>  
                @endforeach
                </tbody> 
            </table> 
        </div> 
    </div> 
</div>
@endsection

@push('script')
    <script>
        
    </script>
@endpush    

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Entry Absen <?= date('Y-m-d') ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('absensi.store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label>NIK</label>
                    <select name="nik" id="shift" class="form-control">
                        <option value="">-- Pilih Karyawan --</option>
                        @foreach ($karyawan as $k)
                            <option value="<?= $k->nik ?>"><?= $k->nik ?> | <?= $k->nm_karyawan ?></option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Shift</label>
                    <select name="shift" id="shift" class="form-control">
                        <option value="">-- Pilih Shift --</option>
                        @foreach ($shifts as $shift)
                            <option value="<?= $shift->kategori ?>"><?= $shift->kategori ?></option>
                        @endforeach
                    </select>
                    <input type="hidden" name="tgl_hadir" value="<?= date('Y-m-d H:i:s') ?>">
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
    </div>
  </div>

@foreach ($data as $d)
<div class="modal fade" id="modal-edit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Entry Absen <?= date('Y-m-d') ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('absensi.update', $d->nik) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="form-group">
                    <label>NIK</label>
                    <select name="nik" id="nik" class="form-control" readonly>
                        <option value="<?= $d->nik ?>"><?= $d->nm_karyawan ?></option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Shift</label>
                    <select name="shift" id="shift" class="form-control">
                        <option value="">-- Pilih Shift --</option>
                        @foreach ($shifts as $shift)
                            <option value="<?= $shift->kategori ?>"><?= $shift->kategori ?></option>
                        @endforeach
                    </select>
                    <input type="hidden" name="tgl_hadir" value="<?= date('Y-m-d H:i:s') ?>">
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endforeach