@extends('layouts.app')
@section('items', 'active')
@section('main', 'show')
@section('main-active', 'active')
@section('page-container')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title mb-3"> Show Data Barang </h3>
        </div>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
                <form class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="name" name="name" readonly
                            value="{{ old('name', $item->name) }}">
                    </div>
                    <div class="form-group">
                        <label for="item_code" class="form-label">Kode Barang</label>
                        <input type="text" class="form-control" id="item_code" name="item_code" readonly
                            value="{{ old('item_code', $item->item_code) }}">
                    </div>
                    <div class="form-group">
                        <label for="type_id" class="form-label">Type Barang</label>
                        <input type="text" class="form-control" id="type_id" name="type_id" readonly
                            value="{{ old('type_id', $item->type->name) }}">
                    </div>
                    <div class="form-group">
                        <label for="type_code" class="form-label">Kode Type</label>
                        <input type="text" class="form-control" id="type_code" name="type_code" readonly
                            value="{{ old('type_code', $item->type->type_code) }}">
                    </div>
                    <div class="form-group">
                        <label for="brand_id" class="form-label">Merek Barang</label>
                        <input type="text" class="form-control" id="brand_id" name="brand_id" readonly
                            value="{{ old('brand_id', $item->brand->name) }}">
                    </div>
        
                    <div class="form-group">
                        <label for="serial" class="form-label">Serial Number</label>
                        <input type="text" class="form-control" id="serial" name="serial" readonly
                            value="{{ old('serial', $item->serial) }}">
                    </div>
                    <div class="form-group">
                        <label for="purchase_date" class="form-label">Tanggal Beli</label>
                        <input type="text" class="form-control" id="purchase_date" name="purchase_date" readonly
                            value="{{ old('purchase_date', $item->purchase_date) }}">
                    </div>
                    <div class="form-group">
                        <label for="mac_address" class="form-label">MAC ADDRESS</label>
                        <input type="text" class="form-control" id="mac_address" name="mac_address" readonly
                            value="{{ old('mac_address', $item->mac_address) }}">
                    </div>
                    <div class="form-group">
                        <label for="ip_address" class="form-label">IP ADDRESS</label>
                        <input type="text" class="form-control" id="ip_address" name="ip_address" readonly
                            value="{{ old('ip_address', $item->ip_address) }}">
                    </div>
                    <div class="form-group">
                        <label for="item_state" class="form-label">Keadaan Barang</label>
                        <input type="text" class="form-control" id="item_state" name="item_state" readonly
                            value="{{ old('item_state', $item->item_state) }}">
                    </div>        
                    <a href="/items" class="btn btn-danger">Back</a>
                </form>
            </div>
          </div>
        </div>
    </div>
    </div>
</div>
@endsection
