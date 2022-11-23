@extends('layouts.app')
@section('divisions','active')
@section('main', 'show')
@section('main-active', 'active')
@section('page-container')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title mb-3"> Input Data Bagian </h3>
  </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <form action="/divisions" method="POST" class="forms-sample" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="division_code" class="form-label">Kode Bagian</label>
                <input type="text" placeholder="Kode Bagian" class="form-control @error('division_code') is-invalid @enderror" id="division_code"
                    name="division_code" required value="{{ old('division_code') }}">
                @error('division_code')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
              <div class="form-group">
                <label for="name">Nama Bagian</label>
                <input type="text" placeholder="Nama Bagian" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                required autofocus value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              {{-- <div class="form-group">
                <label for="exampleTextarea1">Keterangan</label>
                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
              </div> --}}
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="/divisions" class="btn btn-danger">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

