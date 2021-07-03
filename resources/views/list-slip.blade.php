@extends('layouts.app') 
@section('content') 
@include('sweetalert::alert') 

<div class="d-sm-flex align-items-center justify-content-between mb-4"> 
    <h1 class="h3 mb-0 mt-4 text-gray-800">Data Slip Gaji Karyawan</h1>
</div> <hr> 

<div class="d-sm-flex align-items-center justify-content-between mb-4"> 
    <div class="card-body"> 
        <div class="table-responsive"> 
            <table class="table table-bordered table-striped"  id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark"> 
                    <tr align="center"> 
                        <th>NIK</th> 
                        <th>Nama</th> 
                        <th>Opsi</th>
                        </tr>                 
                </thead>
                <tbody>
                    <tr align = "center">
                        <td><?= $karyawan->nik ?></td>
                        <td><?= $karyawan->nm_karyawan ?></td>
                        <td align = "center">
                            <a href="{{ route('slip.cetak', $karyawan->nik) }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Cetak</a>
                            {{-- <a href="#" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"> 
                                <i class="fas fa-trash-alt fa-sm text-white-50"></i> Hapus
                            </a>  --}}
                        </td>
                    </tr>  
                </tbody> 
            </table> 
        </div> 
    </div> 
</div>
@endsection
