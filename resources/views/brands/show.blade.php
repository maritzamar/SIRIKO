@extends('layouts.app')
@section('brands', 'active')
@section('main', 'show')
@section('main-active', 'active')
@section('page-container')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Show Data Merek </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Form Merek</a></li>
          <li class="breadcrumb-item active" aria-current="page">Show Merek</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Merek</label>
                    <input type="text"  class="form-control " id="name" name="name" readonly
                        value="{{ old('name', $brand->name) }}">
                </div>
              <a href="/brands" class="btn btn-danger">Back</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection