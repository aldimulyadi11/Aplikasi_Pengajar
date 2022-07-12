@extends('layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Detail Pengajar </h3>        
    <!--ADVANCED FILE INPUT-->
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
          <form action="{{ route('pengajar.update2') }}" method="POST" class="form-horizontal style-form" enctype="multipart/form-data">
           @csrf 
           @method('PUT')
           <!-- Second Member -->
           <div class="form-group">
            <div class="col-lg-12 col-md-4 col-sm-4 mb">
              <div class="content-panel pn">
                <div id="profile-4">
                  <div class="user">
                    <center>
                    <img img data-enlargable width="180" style="cursor: zoom-in" src="{{url("pribadi/pengajar")}}/{{($pengajars->foto_pribadi) }}" class="img-circle" width="170">                    
                    <h4> {{ $pengajars->nama_lengkap }}</h4>
                    </center>
                  </div>
                </div>                  
              </div>
              <!-- /panel -->
            </div>
          </div>
          <input type="hidden" name="nama_lengkap" id="nama_lengkap" class="form-control" readonly="" value="{{ $pengajars->nama_lengkap }}">
          <input type="hidden" name="id" id="id" class="form-control" readonly="" value="{{ $pengajars->id }}">

          <div class="form-group">
            <label class="col-lg-2 control-label">Nama Panggilan</label>
            <div class="col-lg-10">
              <input type="text" name="nama_panggilan" id="nama_panggilan" class="form-control" readonly="" value="{{ $pengajars->nama_panggilan }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
              <input type="email" name="email_pengajar" id="email_pengajar" class="form-control" readonly="" value="{{ $pengajars->email_pengajar }}">                    
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">No. Telepon</label>
            <div class="col-lg-10">
              <input type="text" name="no_hp" id="no_hp" class="form-control" readonly="" value="{{ $pengajars->no_hp }}">                    
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Alamat</label>
            <div class="col-lg-10">
              <input type="text" name="alamat_lengkap" id="alamat_lengkap" class="form-control" readonly="" value="{{ $pengajars->alamat_lengkap }}">                    
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Aktivitas</label>
            <div class="col-lg-10">
              <input type="text" name="aktivitas" id="aktivitas" class="form-control" readonly="" value="{{ $pengajars->aktivitas }}">                    
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Kode Pos</label>
            <div class="col-lg-10">
              <input type="text" name="kode_pos" id="kode_pos" class="form-control" readonly="" value="{{ $pengajars->kode_pos }}">                    
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Pendidikan Terakhir</label>
            <div class="col-lg-10">
              <input type="text" name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control" readonly="" value="{{ $pengajars->pendidikan_terakhir }}">                    
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Ceritakan Diri Anda</label>
            <div class="col-lg-10">
              <input type="text" name="ceritakan_diri" id="ceritakan_diri" class="form-control" readonly="" value="{{ $pengajars->ceritakan_diri }}">                    
            </div>
          </div>


          <div class="form-group last">
            <label class="control-label col-md-2">Foto KTP</label>
            <div class="col-md-9">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                  <img img data-enlargable width="200" style="cursor: zoom-in" src="{{url("ktp/pengajar")}}/{{($pengajars->foto_ktp) }}" alt="" />
                </div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>                
              </div>
            </div>
          </div>

          <div class="form-group last">
            <label class="control-label col-md-2">Foto Ijazah</label>
            <div class="col-md-9">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                  <img img data-enlargable width="200" style="cursor: zoom-in" src="{{url("ijazah/pengajar")}}/{{($pengajars->foto_ijazah) }}" alt="" />
                </div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>                
              </div>
            </div>
          </div>

          <div class="form-group last">
            <label class="control-label col-md-2">Foto Lainnya</label>
            <div class="col-md-9">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                  <img img data-enlargable width="200" style="cursor: zoom-in" src="{{url("lainnya/pengajar")}}/{{($pengajars->foto_lainnya) }}" alt="" />
                </div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>                
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-5 control-label"></label>
            <div class="col-lg-3">
              <button name="status" type="submit" value="Terima" class="btn-sm btn-theme03" class="form-control">Terima</button>     
              <button name="status" type="submit" value="Tolak" class="btn-sm btn-danger" class="form-control">Tolak</button>
                            
            </div>
          </div>          

        </form>
      </div>
      <!-- /form-panel -->
    </div>
    <!-- /col-lg-12 -->
  </div>
  <!-- row -->
</section>
<!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->

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
