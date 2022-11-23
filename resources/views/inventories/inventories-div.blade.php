@extends('layouts.app')
@section('inventories', 'active')
@section('page-container')
<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h3>Data Inventoris Barang</h3>
            </div>
            <a href="/inventories/create" class="btn1 add-list"><i class="las la-plus mr-3"></i>Tambah Data</a>
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
                        <th>Kode Divisi</th>
                        <th>Pegawai</th>
                        <th>Divisi</th>
                        <th>Barang</th>
                        <th>Kode Barang</th>
                        <th>Type Barang</th>
                        <th>Merek</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="ligth-body">
                    @foreach ($inventories as $inventory)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $inventory->employee->division->division_code }}</td>
                            <td>{{ $inventory->employee->division->name }}</td>
                            <td>{{ $inventory->employee->name }}</td>
                            <td>{{ $inventory->item->name }}</td>
                            <td>{{ $inventory->item->item_code }}</td>
                            <td>{{ $inventory->item->type->name }}</td>
                            <td>{{ $inventory->item->brand->name }}</td>
                            <td>
                                <div class="d-flex align-items-center list-action ">
                                    <a class="badge bg-secondary mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Setting"
                                        href="/laporan"><i class="ri-settings-5-line mr-0"></i></a>
                                    <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                        href="/inventories/{{ $inventory->id }}"><i class="ri-eye-line mr-0"></i></a>
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                        href="/inventories/{{ $inventory->id }}/edit"><i class="ri-pencil-line mr-0"></i></a>
                                        <form action="/inventories/{{ $inventory->id }}" method="post" class="d-inline">
                                         @method('delete')
                                         @csrf
                                         <button class="badge bg-danger border-0"
                                             onclick="return confirm('Apakah anda yakin ingin menghapus divisi ini?')"><span
                                                 data-feather="x-circle"></span><i class="ri-delete-bin-line mr-0"></i></button>
                                        </form>
                                        
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div> 
@endsection
