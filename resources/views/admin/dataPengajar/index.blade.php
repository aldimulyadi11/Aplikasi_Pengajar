@extends('layouts.app')
@section('content')

<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Data User</h3>
    @include('layouts.app.message')
    <div class="row mb">
      <!-- page start-->
      <div class="content-panel">
        <div class="adv-table">
          <a href="{{route('pengajar.create')}}" class="btn-sm btn-theme03" title="Tambah"><i class="fa fa-plus"> Tambah</i></a>
          
          <select onChange="document.location.href = this.options[this.selectedIndex].value;" style="margin-left:10px;margin-bottom:10px;width:200px;">
            <option value="{{ route('pengajar.index') }}">Filter by Materi</option>
            <option value="{{ route('pengajar.index') }}">All</option>
            @foreach($materi as $materis)

            <option value="{{ route('pengajar.filter', $materis->id) }}">{{ $materis->nama_materi }}</option>

            @endforeach
          </select>
<!-- 
          <div class="form-group">            
            <div class="col-lg-2">
              <select name="status"> 
                <option>adasdasda</option>
                @foreach($materi as $materis)               
                
                <a href="{{ route('pengajar.create') }}"><option value="{{ $materis->id }}">{{ $materis->nama_materi }}</option></a>
                
                @endforeach
              </select>
            </div>
          </div> -->

          <br><br>
          <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. Hp</th>                    
                <th>Status</th>                    
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($pengajars as $pengajar)
              <tr class="gradeX">
                <td>{{ $no++ }}</td>
                <td>{{ $pengajar->nama_lengkap }}</td>
                <td>{{ $pengajar->alamat_lengkap }}</td>
                <td>{{ $pengajar->no_hp }}</td>                                        
                <td><a href="{{ route('pengajar.status', $pengajar->id) }}" class="btn-sm btn-theme03" title="Ubah Status" onclick="return confirm('Apakah Anda Yakin ?')">{{ $pengajar->status }}</a></td>
                <td>
                  <a href="{{route('user.editUser', $pengajar->id)}}" class="btn-sm btn-theme03" title="Edit"><i class="fa fa-edit"></i></a><!-- 
                  <a href="{{route('pengajar.detail', $pengajar->id)}}" class="btn-sm btn-theme03" title="Detail"><i class="fa fa-pencil"></i></a> -->
                  <a href="{{route('user.tambahMateri', $pengajar->id)}}" class="btn-sm btn-theme03" title="Materi"><i class="fa fa-plus"></i></a>
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