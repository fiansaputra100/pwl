@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Keluarga</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Keluarga Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Keluarga</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <form method="post" action="{{ $url_form }}">
            @csrf
            {!! (isset($keluarga))? method_field('PUT') : '' !!}
        
     <!-- NIK -->
     <div class="form-group">
              <label>NIK</label>
              <input class="form-control" @error('NIK') is-invalid @enderror type="text" value="{{ isset($keluarga)? $keluarga->NIK : old('NIK') }}" name="NIK">
              @error('NIK')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

             <!-- Nama Keluarga -->
            <div class="form-group">
              <label>Nama</label>
              <input class="form-control" @error('nama_keluarga') is-invalid @enderror type="text" value="{{ isset($keluarga)? $keluarga->nama_keluarga : old('nama_keluarga') }}" name="nama_keluarga">
              @error('nama_keluarga')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            
            <!-- Tempat Lahir -->
            <div class="form-group">
              <label>Tempat Lahir</label>
              <input class="form-control" @error('tempat_lahir') is-invalid @enderror type="text" value="{{ isset($keluarga)? $keluarga->tempat_lahir : old('tempat_lahir') }}" name="tempat_lahir">
              @error('tempat_lahir')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            
            <!-- Tanggal Lahir -->
            <div class="form-group">
        <label>Tanggal Lahir</label>
        <input class="form-control" @error('tanggal_lahir') is-invalid @enderror  type="date" value="{{ isset($keluarga)? $keluarga->tanggal_lahir : old('tanggal_lahir') }}" name="tanggal_lahir">
        @error('tanggal_lahir')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

             <!-- Jenis Kelamin -->
            @if (isset($keluarga))
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <select class="form-control" @error('jenis_kelamin') is-invalid @enderror name="jenis_kelamin">
                <option value="">--Pilih Jenis Kelamin--</option>
                <option value="Laki-laki" {{ $keluarga->jenis_kelamin == 'Laki-laki'? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $keluarga->jenis_kelamin == 'Perempuan'? 'selected' : '' }}>Perempuan</option>
              </select>
              @error('jenis_kelamin')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            @else
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <select class="form-control" @error('jenis_kelamin') is-invalid @enderror name="jenis_kelamin">
                <option value="">--Pilih Jenis Kelamin--</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
              @error('jenis_kelamin')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            @endif




            <!-- Agama -->
                <div class="form-group">
              <label>Agama</label>
              <input class="form-control" @error('agama') is-invalid @enderror type="text" value="{{ isset($keluarga)? $keluarga->agama : old('agama') }}" name="agama">
              @error('agama')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

            <!-- Status Perkawinan -->
            <div class="form-group">
              <label>Status Perkawinan</label>
              <input class="form-control" @error('status_perkawinan') is-invalid @enderror type="text" value="{{ isset($keluarga)? $keluarga->status_perkawinan : old('status_perkawinan') }}" name="status_perkawinan">
              @error('status_perkawinan')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

            <!-- Status Hubungan -->
             <div class="form-group">
              <label>Status Hubungan</label>
              <input class="form-control" @error('status_hubungan') is-invalid @enderror type="text" value="{{ isset($keluarga)? $keluarga->status_hubungan : old('status_hubungan') }}" name="status_hubungan">
              @error('status_hubungan')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

            <!-- Kewarganegaraan -->
            <div class="form-group">
              <label>Kewarganegaraan</label>
              <input class="form-control" @error('kewarganegaraan') is-invalid @enderror type="text" value="{{ isset($keluarga)? $keluarga->kewarganegaraan : old('kewarganegaraan') }}" name="kewarganegaraan">
              @error('kewarganegaraan')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

             <!-- Jenis Pekerjaan -->
             <div class="form-group">
              <label>Pekerjaan</label>
              <input class="form-control" @error('jenis_pekerjaan') is-invalid @enderror type="text" value="{{ isset($keluarga)? $keluarga->jenis_pekerjaan : old('jenis_pekerjaan') }}" name="jenis_pekerjaan">
              @error('jenis_pekerjaan')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block">submit</button>
          </form>
        </div>
        <!-- /.card-body -->
        <!-- /.card-body -->
        <div class="card-footer">
          footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
@endsection