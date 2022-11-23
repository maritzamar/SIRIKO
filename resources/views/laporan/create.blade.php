@extends('layouts.app')
@section('inventories', 'active')
@section('page-container')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Edit Laporan Maintanance</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Form Edit</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Laporan Maintanance</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form action="" method="" class="mb-5" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-12 mt-3">
                    <h5> A. Kondisi Eksternal </h5>
                  </div>
                    <div class="col-md-6">
                            <label for="name" class="form-label">1. Kebersihan</label>
                            <select class="selectpicker form-control" data-style="py-0">
                                <option value="select" disabled selected> Kondisi Awal </option>
                                <option value="select" > Baik </option>
                                <option value="select" > Buruk </option>
                            </select>
                            <select class="selectpicker form-control" data-style="py-0">
                                <option value="select" disabled selected> Kondisi Akhir </option>
                                <option value="select" > Baik </option>
                                <option value="select" > Buruk </option>
                            </select>
                    </div>
                    <div class="col-md-6">
                            <label for="name" class="form-label">2. Pemasangan / Penempatan</label>
                            <select class="selectpicker form-control" data-style="py-0">
                                <option value="select" disabled selected> Kondisi Awal </option>
                                <option value="select" > Baik </option>
                                <option value="select" > Buruk </option>
                            </select>
                            <select class="selectpicker form-control" data-style="py-0">
                                <option value="select" disabled selected> Kondisi Akhir </option>
                                <option value="select" > Baik </option>
                                <option value="select" > Buruk </option>
                            </select>
                    </div>

                    <div class="col-md-12 mt-3">
                      <h5> B. Pemeriksaan Hardware </h5>
                    </div>
                    
                    <div class="col-md-6">
                            <label for="name" class="form-label">1. Spesifikasi Perangkat</label>
                            <select class="selectpicker form-control" data-style="py-0">
                                <option value="select" disabled selected> Kondisi Awal </option>
                                <option value="select" > Baik </option>
                                <option value="select" > Buruk </option>
                            </select>
                            <select class="selectpicker form-control" data-style="py-0">
                                <option value="select" disabled selected> Kondisi Akhir </option>
                                <option value="select" > Baik </option>
                                <option value="select" > Buruk </option>
                            </select>
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">2. Mainboard</label>
                        <select class="selectpicker form-control" data-style="py-0">
                            <option value="select" disabled selected> Kondisi Awal </option>
                            <option value="select" > Baik </option>
                            <option value="select" > Buruk </option>
                        </select>
                        <select class="selectpicker form-control" data-style="py-0">
                            <option value="select" disabled selected> Kondisi Akhir </option>
                            <option value="select" > Baik </option>
                            <option value="select" > Buruk </option>
                        </select>
                    </div>
                    <div class="col-md-6">
                      <label for="name" class="form-label">3. Processor</label>
                      <select class="selectpicker form-control" data-style="py-0">
                          <option value="select" disabled selected> Kondisi Awal </option>
                          <option value="select" > Baik </option>
                          <option value="select" > Buruk </option>
                      </select>
                      <select class="selectpicker form-control" data-style="py-0">
                          <option value="select" disabled selected> Kondisi Akhir </option>
                          <option value="select" > Baik </option>
                          <option value="select" > Buruk </option>
                      </select>
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="form-label">4. Memory/RAM</label>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Awal </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Akhir </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="form-label">5. Hardisk</label>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Awal </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Akhir </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="form-label">6. Optical Drive(CD/DVD - R/RW)</label>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Awal </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Akhir </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="form-label">7. Monitor</label>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Awal </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Akhir </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="form-label">8. Keyboard</label>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Awal </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Akhir </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="form-label">9. Mouse</label>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Awal </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Akhir </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="form-label">10. Printer</label>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Awal </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Akhir </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="form-label">11. Scnanner</label>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Awal </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Akhir </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="form-label">12. UPS</label>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Awal </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Akhir </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="form-label">13. Chasing</label>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Awal </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Akhir </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                  </div>

                  <div class="col-md-12 mt-3">
                    <h5> C. Pemeriksaan Software </h5>
                  </div>

                  <div class="col-md-6">
                    <label for="name" class="form-label">1. DOS</label>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Awal </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Akhir </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="form-label">2. Windows</label>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Awal </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Akhir </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="form-label">3. MS.Office</label>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Awal </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Akhir </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                  </div>
                  <div class="col-md-6">
                      <label for="name" class="form-label">4. Desain Grafis</label>
                      <select class="selectpicker form-control" data-style="py-0">
                          <option value="select" disabled selected> Kondisi Awal </option>
                          <option value="select" > Baik </option>
                          <option value="select" > Buruk </option>
                      </select>
                      <select class="selectpicker form-control" data-style="py-0">
                          <option value="select" disabled selected> Kondisi Akhir </option>
                          <option value="select" > Baik </option>
                          <option value="select" > Buruk </option>
                      </select>
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="form-label">5. Multimedia</label>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Awal </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Akhir </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="form-label">6. Anti Virus</label>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Awal </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Akhir </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="form-label">7. Koneksi Jaringan</label>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Awal </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Akhir </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="form-label">8. Scanning Hardisk</label>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Awal </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Akhir </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="form-label">9. Defragmentasi Harddisk </label>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Awal </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Akhir </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="form-label">10. Optimalisasi System</label>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Awal </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Akhir </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="form-label">11. Back Up Data</label>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Awal </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                    <select class="selectpicker form-control" data-style="py-0">
                        <option value="select" disabled selected> Kondisi Akhir </option>
                        <option value="select" > Baik </option>
                        <option value="select" > Buruk </option>
                    </select>
                  </div>
                </div>
                <button type="submit" class="btn mt-3 btn-primary">Submit</button>
                <a href="/laporan" class="btn mt-3 btn-danger">Cancel</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
