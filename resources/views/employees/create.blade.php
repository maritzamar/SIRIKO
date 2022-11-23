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
          <li class="breadcrumb-item active" aria-current="page">Input Pegawai</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Input Data Pegawai</h4>
            <p class="card-description"></p>
            <form action="/employees" method="POST" class="forms-sample" enctype="multipart/form-data">
            @csrf
            <div class="from-group">
                <label for="name" class="form-label">Nama Pegawai</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    required autofocus value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="from-group">
                <label for="division_id" class="form-label">Bagian</label>
                <select class="selectpicker form-control" name='division_id'>
                           <option value="select" disabled selected> Pilih Bagian </option>
                    @foreach ($divisions as $division)
                        @if (old('division_id') == $division->id)
                            <option value="{{ $division->id }}" selected>{{ $division->name }}</option>
                        @else
                            <option value="{{ $division->id }}">{{ $division->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn mt-3 btn-primary mr-2">Submit</button>
            <a href="/employees" class="btn mt-3 btn-danger">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection