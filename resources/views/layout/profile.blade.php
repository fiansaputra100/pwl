@extends('layout.template')
  @section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
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
          <h3 class="card-title">Profile Saya</h3>

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
          <h2>Nama : Fian Rifky Saputra</h2><br>
          <h2>TTL  : Jakarta, 1 Mei 2002</h2><br>
          <h2>Status : Berkuliah di Politeknik Negeri Malang</h2><br>
          <h2>Jurusan : Teknologi Informasi</h2><br>
          <h2>Prodi : DIV Teknik Informatika</h2><br>
          <h2>Semester : Semester 4</h2><br>
          <h2>Alamat : Komplek Amarta, ABD Saleh, Pakis, Malang</h2><br>
          <h2>NO HP  : 085546259011<h2>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
    <script>
      alert('hello')
    </script>
  </div>
  @endsection
  @push('custom_js')
    @endpush