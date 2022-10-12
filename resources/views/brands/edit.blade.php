@extends('layouts.app')
@section('brands', 'active')
@section('main', 'show')
@section('main-active', 'active')
@section('page-container')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Edit Data Merek </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Form Merek</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Merek</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form action="/brands/{{ $brand->id }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                  @method('patch')
                  @csrf
                  <div class="form-group">
                      <label for="name">Nama Merek</label>
                      <input type="text"  placeholder="Nama Merek" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                          required autofocus value="{{ old('name') }}">
                      @error('name')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                  </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="/brands" class="btn btn-danger">Cancel</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  @endsection