@extends('layouts.app')
@section('employees', 'active')
@section('main', 'show')
@section('main-active', 'active')
@section('page-container')


<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Data Pegawai </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Form Pegawai</a></li>
            <li class="breadcrumb-item active" aria-current="page">Show Data Pegawai</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Show</h4>
              <p class="card-description"></p>
            <form class="forms-sample" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Nama Pegawai</label>
                <input type="text" class="form-control" id="name" name="name" readonly
                    value="{{ old('name', $employee->name) }}">
            </div>
            <div class="form-group">
                <label for="division_id" class="form-label">Bagian</label>
                <input type="text" class="form-control" id="division_id" name="division_id" readonly
                    value="{{ old('division_id', $employee->division->name) }}">
            </div>
            <div class="form-group">
                <label for="division_code" class="form-label">Kode Bagian</label>
                <input type="text" class="form-control" id="division_code" name="division_code" readonly
                    value="{{ old('division_code', $employee->division->division_code) }}">
            </div>
            <a href="/employees" class="btn btn-danger">Back</a>
        </form>
    </div>
@endsection
