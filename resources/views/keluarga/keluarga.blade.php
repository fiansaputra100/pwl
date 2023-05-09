@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session("success") }}
            </div>
        @endif
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Keluarga</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Keluarga Page</li>
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
          <a href="{{url('keluarga/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
          <table class="table table-bordered tabel-hover">
            <thead class="table">
              <tr class="text-center bg-secondary">
                <td>No</td>
                <td>NIK</td>
                <td>Nama</td>
                <td>Tempat Lahir</td>
                <td>tanggal Lahir</td>s
                <td>Jenis Kelamin</td>
                <td>Agama</td>
                <td>Status Perkawinan</td>
                <td>Status Hubungan</td>
                <td>kewarganegaraan</td>
                <td>Pekerjaan</td>
              </tr>
            </thead>


            <tbody>
            @php
            $no = 1;
            @endphp
            @if ($keluarga->count() > 0)
            @foreach ($keluarga as $k)
            <tr>
              <td class="text-center">{{ $no++ }}</td>
              <td>{{ $k->NIK }}</td>
              <td>{{ $k->nama_keluarga }}</td>
              <td>{{ $k->tempat_lahir }}</td>
              <td>{{ $k->tanggal_lahir }}</td>
              <td>{{ $k->jenis_kelamin }}</td>
              <td>{{ $k->agama }}</td>
              <td>{{ $k->status_perkawinan }}</td>
              <td>{{ $k->status_hubungan }}</td>
              <td>{{ $k->kewarganegaraan }}</td>
              <td>{{ $k->jenis_pekerjaan }}</td>
              <td>
                <!-- Bikin tombol edit dan delete -->
                <a href="{{ url('/keluarga/'. $k->NIK.'/edit') }}" class="btn btn-sm btn-warning">edit</a>
                <form method="POST" action="{{ url('/keluarga/'.$k->NIK) }}" >
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
            @else
              <tr><td colspan="6" class="text-center">Data tidak ada</td></tr>
            @endif
            </tbody>
          </table>
        </div>
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
@push('custom_js')
    <script>
        
    </script>
@endpush
