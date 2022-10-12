@extends('layouts.app')
@section('maintenances', 'active')
@section('page-container')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Input Data Maintenance </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Form Maintenance</a></li>
            <li class="breadcrumb-item active" aria-current="page">Input Data Maintenance</li>
          </ol>
        </nav>
    </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
        <form action="/maintenances" method="POST" class="mb-5" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="item_id" class="form-label">Nama Barang</label>
                <select class="selectpicker form-control" name='item_id' data-style="py-0">
                    <option value="select" disabled selected> Pilih Barang </option>
                    @foreach ($items as $item)
                        @if (old('item_id') == $item->id)
                            <option value="{{ $item->id }}" selected>
                                {{ $item->name }}
                            </option>
                        @else
                            <option value="{{ $item->id }}">
                                {{ $item->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="employee_id" class="form-label">Pegawai</label>
                <select class="selectpicker form-control" name='employee_id' data-style="py-0">
                    <option value="select" disabled selected> Pilih Nama Pegawai </option>
                    @foreach ($employees as $employee)
                        @if (old('employee_id') == $employee->id)
                            <option value="{{ $employee->id }}" selected>
                                {{ $employee->name }}
                            </option>
                        @else
                            <option value="{{ $employee->id }}">
                                {{ $employee->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            

            <div class="form-group">
                <label for="planning" class="form-label">Rencana</label>
                <input type="text" class="form-control" id="planning" name="planning" required
                    value="{{ old('planning') }}">
            </div>
            <div class="form-group">
                <label for="realisation" class="form-label">Realisasi</label>
                <input type="date" class="form-control" id="realisation" name="realisation" required
                    value="{{ old('realisation') }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/maintenances" class="btn btn-danger">Cancel</a>
        </form>
    </div>
@endsection
