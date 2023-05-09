@extends('layouts.template')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
@section('content')
<div class="card-body" style="margin-left: 250px;">
    <form method="post" action="{{ $url_form }}">
    @csrf
    {!! (isset($mhs))? method_field('PUT') : '' !!}


            <div class="form-group">
              <label>Nama Mata Kuliah</label>
              <input class="form-control" @error('nama_matkul') is-invalid @enderror type="text" value="{{ isset($matkul)? $matkul->nama_matkul : old('nama_matkul') }}" name="nama_matkul">
              @error('nama_matkul')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label>SKS</label>
              <input class="form-control" @error('sks') is-invalid @enderror type="text" value="{{ isset($matkul)? $matkul->sks : old('sks') }}" name="sks">
              @error('sks')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label>Jam</label>
              <input class="form-control" @error('jam') is-invalid @enderror type="text" value="{{ isset($matkul)? $matkul->jam : old('jam') }}" name="jam">
              @error('jam')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
   

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


    
    </form>
</div>
@endsection