@extends('layouts.app')
@section('types', 'active')
@section('main', 'show')
@section('page-container')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Show Data Tipe </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Form Tipe</a></li>
            <li class="breadcrumb-item active" aria-current="page">Show Tipe</li>
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
                        <label for="type_code" class="form-label">Kode Tipe Barang</label>
                        <input type="text" class="form-control" id="type_code" name="type_code" readonly
                            value="{{ old('type_code', $type->type_code) }}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Tipe Barang</label>
                        <input type="text" class="form-control" id="name" name="name" readonly
                            value="{{ old('name', $type->name) }}">
                    </div>
                    <a href="/types" class="btn btn-danger">Back</a>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
