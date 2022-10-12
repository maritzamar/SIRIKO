@extends('layouts.app')
@section('items', 'active')
@section('main', 'show')
@section('main-active', 'active')
@section('page-container')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title mb-3"> Edit Data Barang </h3>
        </div>
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <form action="/items/{{ $item->id }}" method="POST" class="mb-5" enctype="form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="name" name="name" required
                                    value="{{ old('name', $item->name) }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="item_code" class="form-label">Kode Barang</label>
                            <input type="text" class="form-control" id="item_code" name="item_code" required
                                value="{{ old('item_code', $item->item_code) }}">
                        </div>
                        <div class="col-md-6">
                            <label for="type_id" class="form-label">Tipe Barang</label>
                            <select class="selectpicker form-control" name='type_id'>
                                @foreach ($types as $type)
                                    @if (old('type_id', $item->type_id) == $type->id)
                                        <option value="{{ $type->id }}" selected>
                                            {{ $type->name }}
                                        </option>
                                    @else
                                        <option value="{{ $type->id }}">
                                            {{ $type->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
            
                        <div class="col-md-6">
                            <label for="brand_id" class="form-label">Merek</label>
                            <select class="selectpicker form-control" name='brand_id'>
                                @foreach ($brands as $brand)
                                    @if (old('brand_id', $item->brand_id) == $brand->id)
                                        <option value="{{ $brand->id }}" selected>
                                            {{ $brand->name }}
                                        </option>
                                    @else
                                        <option value="{{ $brand->id }}">
                                            {{ $brand->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
            
                        <div class="col-md-6">
                            <label for="serial" class="form-label">Serial Number</label>
                            <input type="text" class="form-control" id="serial" name="serial"
                                value="{{ old('serial', $item->serial) }}">
                        </div>
                        <div class="col-md-6">
                            <label for="purchase_date" class="form-label">Tanggal Beli</label>
                            <input type="text" class="form-control" id="purchase_date" name="purchase_date"
                                value="{{ old('purchase_date', $item->purchase_date) }}">
                        </div>
                        <div class="col-md-6">
                            <label for="mac_address" class="form-label">MAC ADDRESS</label>
                            <input type="text" class="form-control" id="mac_address" name="mac_address"
                                value="{{ old('mac_address', $item->mac_address) }}">
                        </div>
                        <div class="col-md-6">
                            <label for="ip_address" class="form-label">IP ADDRESS</label>
                            <input type="text" class="form-control" id="ip_address" name="ip_address"
                                value="{{ old('ip_address', $item->ip_address) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="item_state" class="form-label">Keadaan Barang</label>
                        <input type="text" class="form-control" id="item_state" name="item_state" required
                            value="{{ old('item_state', $item->item_state) }}">
                    </div>
        
                    <button type="submit" class="btn btn-primary">Edit Barang</button>
                    <a href="/items" class="btn btn-danger">Cancel</a>  
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
