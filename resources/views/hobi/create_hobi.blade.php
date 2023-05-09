@extends('layouts.template')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
@section('content')
<div class="card-body" style="margin-left: 250px;">
    <form method="post" action="{{ $url_form }}">
    @csrf
    {!! (isset($mhs))? method_field('PUT') : '' !!}


    <div class="form-group">
        <label>Kode</label>
        <input class="form-control @error('Kode') is-invalid @enderror" type="text" value="{{ isset($hobi)? $hobi->Kode : old('Kode') }}" name="Kode">
        @error('Kode')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>nama</label>
        <input class="form-control @error('nama') is-invalid @enderror"  type="text" value="{{ isset($hobi)? $hobi->nama : old('nama') }}" name="nama">
        @error('nama')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>nama hobi</label>
        <input class="form-control @error('nama_hobi') is-invalid @enderror"  type="text" value="{{ isset($hobi)? $hobi->nama_hobi : old('nama_hobi') }}" name="nama_hobi">
        @error('nama_hobi')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>kriteria</label>
        <input class="form-control @error('kriteria') is-invalid @enderror"  type="text" value="{{ isset($hobi)? $hobi->kriteria : old('kriteria') }}" name="kriteria">
        @error('kriteria')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
   

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


    
    </form>
</div>
@endsection