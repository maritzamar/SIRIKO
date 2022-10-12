@extends('layouts.app')
@section('divisions','active')
@section('main', 'show')
@section('main-active', 'active')
@section('page-container')

<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h3 class="mb-3">Show Bagian</h3>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <form class="forms-sample" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Nama Bagian</label>
                <input type="text" class="form-control" id="name" name="name" readonly
                    value="{{ old('name', $division->name) }}">
            </div>
            <div class="form-group">
                <label for="division_code" class="form-label">Kode Bagian</label>
                <input type="text" class="form-control" id="division_code" name="division_code" readonly
                    value="{{ old('division_code', $division->division_code) }}">
            </div>

            <a href="/divisions" class="btn btn-danger">Back</a>
        </form>
    </div>
</div>
@endsection
