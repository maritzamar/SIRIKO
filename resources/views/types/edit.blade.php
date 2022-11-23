@extends('layouts.app')
@section('types', 'active')
@section('main', 'show')
@section('main-active', 'active')
@section('page-container')


<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Data Tipe </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Form Tipe</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data Tipe</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit Data Tipe</h4>
              <p class="card-description"></p>
        <form action="/types/{{ $type->id }}" method="POST" class="mb-5" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Tipe Barang</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    required autofocus value="{{ old('name', $type->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="type_code" class="form-label">Kode Tipe Barang</label>
                <input type="text" class="form-control @error('type_code') is-invalid @enderror" id="type_code"
                    name="type_code" required value="{{ old('type_code', $type->type_code) }}">
                @error('type_code')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/types" class="btn btn-danger">Cancel</a>
        </form>
    </div>
   </div>
</div>
@endsection
