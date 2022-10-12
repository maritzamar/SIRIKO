@extends('layouts.app')
@section('divisions','active')
@section('main', 'show')
@section('main-active', 'active')
@section('page-container')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title mb-3"> Edit Data Bagian </h3>
        </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form action="/divisions/{{ $division->id }}" method="POST" class="mb-5" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="from-group">
                    <label for="name" class="form-label">Nama Bagian</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                        required autofocus value="{{ old('name', $division->name) }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="from-group">
                    <label for="division_code" class="form-label">Kode Bagian</label>
                    <input type="text" class="form-control @error('division_code') is-invalid @enderror" id="division_code"
                        name="division_code" required value="{{ old('division_code', $division->division_code) }}">
                    @error('division_code')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
    
                <button type="submit" class="btn btn-primary">Edit Bagian</button>
                <a href="/divisions" class="btn btn-danger">Cancel</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
