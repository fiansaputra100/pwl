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
            <h1>Hobi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Hobi Page</li>
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
          <h3 class="card-title">Hobi Saya</h3>
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
          <a href="{{url('hobi/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
          <table class="table table-bordered tabel-hover">
            <thead class="table">
              <tr class="text-center bg-secondary">
              <th>No</th>
                <td>Kode</td>
                <td>Nama</td>
                <td>Nama Hobi</td>
                <td>Kriteria</td>
              </tr>


            </thead>
            <tbody>
            @php
            $no = 1;
            @endphp
            @if ($hobi->count() > 0)
            @foreach ($hobi as $h)
            <tr>
              <td class="text-center">{{ $no++ }}</td>
              <td>{{ $h->Kode }}</td>
              <td>{{ $h->nama }}</td>
              <td>{{ $h->nama_hobi }}</td>
              <td>{{ $h->kriteria }}</td>
              <td>
                <!-- Bikin tombol edit dan delete -->
                <a href="{{ url('/hobi/'. $h->id.'/edit') }}" class="btn btn-sm btn-warning">edit</a>
                <form method="POST" action="{{ url('/hobi/'.$h->id) }}" >
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
            </tbody>
            @else
              <tr><td colspan="6" class="text-center">Data tidak ada</td></tr>
            @endif
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
