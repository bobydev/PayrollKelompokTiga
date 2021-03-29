@extends('layouts.app')
@section('content')
                        <h1 class="mt-4">Beranda</h1>
                        <!-- <ol class="breadcrumb mb-4">
                        </ol> -->
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Jumlah karyawan aktif</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="small text-white"><i>100 Orang</i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Gaji yang harus dibayar</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="small text-white"><i>Rp. 165,000,000</i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total jam lembur</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="small text-white"><i>60 jam</i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Total cuti</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="small text-white"><i>23 hari</i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Karyawan
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Kantor</th>
                                                <th>Usia</th>
                                                <th>Tanggal masuk</th>
                                                <th>Gaji</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Kantor</th>
                                                <th>Usia</th>
                                                <th>Tanggal masuk</th>
                                                <th>Gaji</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Boby Aprespa</td>
                                                <td>General Manager</td>
                                                <td>Surabaya</td>
                                                <td>25</td>
                                                <td>2009/04/28</td>
                                                <td>Rp. 35,800,000</td>
                                            </tr>
                                            <tr>
                                                <td>Hasti Fitria Utami</td>
                                                <td>Marketing Manager</td>
                                                <td>Karawang</td>
                                                <td>23</td>
                                                <td>2011/04/25</td>
                                                <td>Rp. 20,800,000</td>
                                            </tr>
                                            <tr>
                                                <td>Farroh Maulida</td>
                                                <td>R&D Supervisor</td>
                                                <td>Bandung</td>
                                                <td>21</td>
                                                <td>2011/07/25</td>
                                                <td>Rp. 10,750,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
@endsection
