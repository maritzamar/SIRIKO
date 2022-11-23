@extends('layouts.app')
@section('dashboard', 'active')
@section('page-container')

<div class="row">
    <div class="col-sm-12">
       <h3 class="mb-3">PERUMDA Tirta Manuntung Balikpapan</h3>
    </div>
    @foreach ($divisions as $division)
    <div class="col-lg-3 col-md-4 col-sm-4">
        <a href="/pegawai">
        <div class="card_d mt-3" >
           <div class="card-body">
             <div class="style-text mt-2 card-bagian">
                <a href="/dashboard1" class="btn text-white text-center flex-fill p-2">
                    {{ $division->name }}</a>
             </div>
           </div>
        </div>
        </a>
     </div>
     @endforeach
</div>
@endsection