@extends('layouts.app')
@section('employees', 'active')
@section('main', 'show')
@section('main-active', 'active')
@section('page-container')

<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h3 class="mb-3">Data Pegawai</h3>
            </div>
            <a href="/employees/create" class="btn1 btn-primary add-list"><i class="las la-plus mr-3"></i>Tambah Data Pegawai</a>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="table-responsive rounded mb-3">
        <table id="datatable" class="table data-tables table-striped">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                        <th>No</th>
                        <th>Nama Pegawai</th>
                        <th>Bagian</th>
                        <th>Kode Bagian</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="ligth-body">
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->division->name }}</td>
                            <td>{{ $employee->division->division_code }}</td>
                        <td>
                        <div class="d-flex align-items-center list-action">
                            <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                       href="/employees/{{ $employee->id }}"><i class="ri-eye-line mr-0"></i></a>
                            <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                href="/employees/{{ $employee->id }}/edit"><i class="ri-pencil-line mr-0"></i></a>
                            <form action="/employees/{{ $employee->id }}" method="post" class="d-inline">
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
