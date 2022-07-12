@extends('layouts.app')
@section('content')

<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Contact Us</h3>
    @include('layouts.app.message')
    <div class="row mb">
      <!-- page start-->
      <div class="content-panel">
        <div class="adv-table">          
          <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>              
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($pesan as $pesans)
              <tr class="gradeX">
                <td>{{ $no++ }}</td>
                <td>{{ $pesans->nama }}</td>
                <td>{{ $pesans->email }}</td>
                <td>
                  <a href="{{route('pesanDetail', $pesans)}}" class="btn-sm btn-theme03" title="Detail"><i class="fa fa-pencil"></i></a>
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