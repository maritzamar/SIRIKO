@extends('layouts.app')
@section('types', 'active')
@section('main', 'show')
@section('main-active', 'active')
@section('page-container')

<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">Tipe Barang</h4>
            </div>
            <a href="/types/create" class="btn1 add-list"><i class="las la-plus mr-3"></i>Tambah Tipe Barang</a>
        </div>
    </div>
    <div class="d-flex col-12 w-25 ">
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
                        <th>Kode Tipe Barang</th>
                        <th>Tipe Barang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="ligth-body">
                    @foreach ($types as $type)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $type->type_code }}</td>
                            <td>{{ $type->name }}</td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                        href="/types/{{ $type->id }}"><i class="ri-eye-line mr-0"></i></a>
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                        href="/types/{{ $type->id }}/edit"><i class="ri-pencil-line mr-0"></i></a>
                                        <form action="/types/{{ $type->id }}" method="post" class="d-inline">
                                         @method('delete')
                                         @csrf
                                         <button class="badge bg-danger border-0"
                                             onclick="return confirm('Apakah anda yakin ingin menghapus tipe ini?')"><span
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
