@extends('layouts.app')
@section('divisions','active')
@section('main', 'show')
@section('main-active', 'active')
@section('page-container')

    <div class="row">
           <div class="col-lg-12">
               <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                   <div>
                       <h3 class="mb-3">Data Bagian</h3>
                   </div>
                   <a href="/divisions/create" class="btn1 add-list"><i class="las la-plus mr-3"></i>Tambah Bagian</a>
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
                        <th>Nama Bagian</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="ligth-body">
                    @foreach ($divisions as $division)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $division->division_code }}</td>
                            <td>{{ $division->name }}</td>
                            <td>
                                <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                    href="/divisions/{{ $division->id }}"><i class="ri-eye-line mr-0"></i></a>
                                <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                    href="/divisions/{{ $division->id }}/edit"><i class="ri-pencil-line mr-0"></i></a>
                                <form action="/divisions/{{ $division->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus divisi ini?')"><span
                                        data-feather="x-circle"></span><i class="ri-delete-bin-line mr-0"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
