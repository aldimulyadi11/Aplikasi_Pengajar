@extends('layouts.app')
@section('content')

<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Notifikasi</h3>
    <div class="row mb">
      <!-- page start-->
      <div class="content-panel">
        <div class="adv-table">
          <select onChange="document.location.href = this.options[this.selectedIndex].value;" style="margin-left:10px;margin-bottom:10px;width:200px;">
            <option value="{{ route('pengajar.index2') }}">Filter by Materi</option>
            <option value="{{ route('pengajar.index2') }}">All</option>
            @foreach($materi as $materis)

            <option value="{{ route('pengajar.filter2', $materis->id) }}">{{ $materis->nama_materi }}</option>

            @endforeach
          </select>

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
                <td><span class="btn-sm btn-theme03">{{ $pengajar->status }}</span></td>
                <td>                      
                  <a href="{{route('pengajar.detail2', $pengajar->id)}}" class="btn-sm btn-theme03" title="Detail"><i class="fa fa-pencil"></i></a>
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