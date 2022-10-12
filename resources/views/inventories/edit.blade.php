@extends('layouts.app')
@section('main', 'show')
@section('page-container')

<div class="main-panel">
  <div class="content-wrapper">
      <div class="page-header">
          <h3 class="page-title"> Edit Data Inventaris </h3>
      </div>
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <form action="/inventories/{{ $inventory->id }}" method="POST" class="mb-5" enctype="form-data">
                  @method('PUT')
                  @csrf
                  <div class="form-group">
                    <label for="employee_id" class="form-label">Pegawai</label>
                    <select class="selectpicker form-control" name='employee_id'>
                      <option value="select" disabled selected> Pilih Nama Pegawai </option>
                        @foreach ($employees as $employee)
                            @if (old('employee_id', $employee->id) == $employee->id)
                                <option value="{{ $employee->id }}" selected>
                                    {{ $employee->name }}
                                </option>
                            @else
                                <option value="{{ $employee->id }}">
                                    {{ $employee->name }}</option>
                            @endif
                        @endforeach
                    </select>
                  </div>
    
                  <div class="form-group">
                    <label for="item_id" class="form-label">Nama Barang</label>
                    <select class="selectpicker form-control" name='item_id'>
                      <option value="select" disabled selected> Pilih Barang </option>
                        @foreach ($items as $item)
                            @if (old('item_id', $item->id) == $item->id)
                                <option value="{{ $item->id }}" selected>
                                    {{ $item->name }}
                                </option>
                            @else
                                <option value="{{ $item->id }}">
                                    {{ $item->name }}</option>
                            @endif
                        @endforeach
                    </select>
                  </div>
    
                  <div class="form-group">
                    <label for="unit_code" class="form-label">Kode Unit</label>
                    <input type="text" class="form-control" id="unit_code" name="unit_code" required
                        value="{{ old('unit_code', $inventory->unit_code) }}">
                  </div>
    
                  <button type="submit" class="btn btn-primary">Edit Data</button>
                  <a href="/inventories" class="btn btn-danger">Cancel</a>
                </form>
              </div>
            </div>
          </div>
      </div>
  </div>
</div>
@endsection
