@extends('layouts.app')
@section('inventories', 'active')
@section('page-container')


        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Maintanance</h4>
                        <p class="mb-0">Laporan Kondisi Barang</p>
                    </div>
                    <a href="/laporan/create" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Edit Laporan</a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class=" rounded mb-3">
                <table class="data-table table mb-0 ">
                    <thead class="bg-white text-uppercase">
                        <tr class="ligth text-center">
                            <th>Uraian</th>
                            <th>Kondisi Awal</th>
                            <th>Kondisi Akhir</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr >
                           <th colspan="4" class="text-left">A. Kondisi Eksternal</th>
                        </tr>
                        <tr>
                            <td class="text-left">Kebersihan</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Pemasangan / Penempatan</td>
                            <td><div class="badge badge-secondary">Buruk</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        {{-- --------------------------------------------------- --}}
                        <tr>
                            <th colspan="4" class="text-left">B. Pemeriksaan Hardware</th>
                         </tr>
                         <tr>
                             <td class="text-left">Spesifikasi Perangkat</td>
                             <td><div class="badge badge-success">Baik</div></td>
                             <td><div class="badge badge-success">Baik</div></td>
                             <td>-</td>
                         </tr>
                         <tr>
                            <td class="text-left">Mainboard</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Processor</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Memory/RAM</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Hardisk</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Optical Drive(CD/DVD - R/RW)</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">monitor</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Keyboard</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Mouse</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Printer</td>
                            <td><div>-</div></td>
                            <td><div>-</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Scanner</td>
                            <td><div>-</div></td>
                            <td><div>-</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">UPS</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">chasing</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>

                        {{-- --------------------------------------------------- --}}
                        {{-- --------------------------------------------------- --}}
                        <tr>
                            <th colspan="4" class="text-left">C. Pemeriksaan Software</th>
                         </tr>
                         <tr>
                             <td class="text-left">DOS</td>
                             <td><div class="badge badge-success">Baik</div></td>
                             <td><div class="badge badge-success">Baik</div></td>
                             <td>-</td>
                         </tr>
                         <tr>
                            <td class="text-left">Windows</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Linux</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Ms.Office</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Desain Grafis</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Multimedia</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Anti Virus</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Koneksi Jaringan</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Scanning Virus</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Scanning Harddisk</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Defragmentasi Harddisk</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Optimalisasi System</td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Back Up Data</td>
                            <td><div>-</div></td>
                            <td><div class="badge badge-success">Baik</div></td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <!-- Page end  -->


@endsection