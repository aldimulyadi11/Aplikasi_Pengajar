@extends('layouts.app')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Data Materi</h3>

        @include('layouts.app.message')
        
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <a href="{{route('materi.create')}}" class="btn-sm btn-theme03" title="Tambah"><i class="fa fa-plus"> Tambah</i></a> <br><br>
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Foto Materi</th>
                    <th>Nama Materi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($materis as $materi)
                  <tr class="gradeX">
                    <td>{{ $no++ }}</td>                    
                    <td><img img data-enlargable width="50" style="cursor: zoom-in" src="{{url("foto/materi")}}/{{($materi->foto_materi) }}"></td>
                    <td>{{ $materi->nama_materi }}</td>
                    <td>
                      <a href="{{route('materi.edit', $materi)}}" class="btn-sm btn-theme03" title="Edit"><i class="fa fa-edit"></i></a>
                      <!-- <a href="{{route('materi.destroy2', $materi)}}" class="btn-sm btn-theme03" title="Hapus" onclick="return confirm('Apakah Anda Yakin ?')"><i class="fa fa-trash"></i>
                      </a> -->                    
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

<script>
  $('img[data-enlargable]').addClass('img-enlargable').click(function(){
    var src = $(this).attr('src');
    $('<div>').css({
      background: 'RGBA(0,0,0,.5) url('+src+') no-repeat center',
      backgroundSize: 'contain',
      width:'100%', height:'100%',
      position:'fixed',
      zIndex:'10000',
      top:'0', left:'0',
      cursor: 'zoom-out'
    }).click(function(){
      $(this).remove();
    }).appendTo('body');
  });
</script>

@endsection