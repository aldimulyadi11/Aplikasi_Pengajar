@extends('layouts.app')
@section('content')

<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Data Materi</h3>

        @include('layouts.app.message')
        
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <a href="{{route('detailMateri.create', $id)}}" class="btn-sm btn-theme03" title="Tambah"><i class="fa fa-plus"> Tambah</i></a> <br><br>
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>No</th>                    
                    <th>Nama Materi</th>
                    <th>Harga Materi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($detailMateri as $materi)
                  <tr class="gradeX">
                    <td>{{ $no++ }}</td>
                    <td>{{ $materi->materi->nama_materi }}</td>
                    <td>{{ $materi->materi->harga_materi }}</td>                    
                    <td>
                      <a href="{{route('detailMateri.edit', $materi)}}" class="btn-sm btn-theme03" title="Edit"><i class="fa fa-edit"></i></a>
                      <a href="{{route('detailMateri.destroy', $materi)}}" class="btn-sm btn-theme03" title="Hapus" onclick="return confirm('Apakah Anda Yakin ?')"><i class="fa fa-trash"></i>
                      </a>                    
                    </td>
                  </tr>                  
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
@endsection