@extends('layouts.app') 
@section('content') 
@include('sweetalert::alert') 

<div class="d-sm-flex align-items-center justify-content-between mb-4"> 
    <h1 class="h3 mb-0 mt-4 text-gray-800">Data Gaji Karyawan</h1>
</div> <hr> 
<div class="card-header py-3" align="right"> 
    <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"> 
        <i class="text-white-50"></i> Print slip gaji
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
                        <th>Gaji Pokok</th>
                        <th>Jam Lembur</th> 
                        <th>Uang Lembur</th> 
                        <th>Tgl. Transfer</th>
                        </tr>                 
                </thead>
                <tbody>
                
                </tbody> 
            </table> 
        </div> 
    </div> 
</div>

                @endsection 