@extends('layout.template')
  @section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tampilan Dashboard</h1>
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
          <h3 class="card-title">Tampilan dashboard</h3>

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
          Selamat Datang
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
      <div class="card-body-table-responsive p-0" style="height: 300px">
      <table class="table table-head-fixed">
        <thread>
          <tr>
            <th>Kode Mata Kuliah</th>
            <th>Mata Kuliah</th>
            <th>Hari</th>
            <th>Nama Dosen</th>
          </tr>
        </thread>
        <tbody>
          @foreach($matakuliah as $n=>$a)
          <tr>
         
            <td>{{$a -> Kode_MK}}</td>
            <td>{{$a -> nama_matakuliah}}</td>
            <td>{{$a -> hari}}</td>
            <td>{{$a -> nama_dosen}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      
    </section>
    <!-- /.content -->
    <script>
      alert('hello')
    </script>
  </div>
  @endsection
  @push('custom_js')
    @endpush

    