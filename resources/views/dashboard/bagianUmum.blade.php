@extends('layouts.app')
@section('dashboard', 'active')
@section('page-container')
<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h3>Data Inventaris Barang</h3>
            </div>
           
        </div>
    </div>

        <div class="table-responsive rounded mb-3 ">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
    
            <table id="datatable" class="table data-tables table-striped">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                        <th>No</th>
                        <th>Kode Bagian</th>
                        <th>Bagian</th>
                        <th>Pegawai</th>
                        <th>Barang</th>
                        <th>Kode Barang</th>
                        <th>Tipe Barang</th>
                        <th>Merek</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="ligth-body">
                  
                        <tr>
                            <td>01</td>
                            <td>A10</td>
                            <td>Bagian Umum</td>
                            <td>Lutfi Agus. RO</td>
                            <td>Monitor Lenovo 4k</td>
                            <td>03.03</td>
                            <td>Monitor</td>
                            <td>Dell</td>
                            <td>
                                <div class="d-flex align-items-center list-action ">
                                    <a class="badge bg-secondary mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Setting"
                                        href="/laporan"><i class="ri-settings-5-line mr-0"></i></a>
                                    <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                        href=""><i class="ri-eye-line mr-0"></i></a>
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                        href=""><i class="ri-pencil-line mr-0"></i></a>
                                       
                                        
                                </div>
                            </td>
                        </tr>
               
                </tbody>
            </table>
        </div>
    </div>
</div> 
@endsection
