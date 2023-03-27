@extends('layout.template')
  @section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Latar Belakang</h1>
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
          <h3 class="card-title">Pengalaman Kuliah</h3>

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
          Awal mula mendaftar sebenarnya saya ingin mengambil jurusan elektro prodi jaringan telekomunikasi digital,namun <br>
          takdir mengarahkan saya untuk keterima di informatika, awal dari saya berkuliah itu merasa berat sekali karena<br>
          semua materi terasa membingungkan,namun setelah saya menemukan target yang saya tuju di masa depan ternyata <br>
          muncul di semester 2 yaitu mata kuliah basis data yang dimana saya suka soal database, bahasa sql dll, yang <br>
          dimana lama kelamaan saya juga ingin belajar website khususnya di php, html, javascript, laravel dll.
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