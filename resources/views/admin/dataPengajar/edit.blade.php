@extends('layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Edit Data Pengajar </h3>        
    <!--ADVANCED FILE INPUT-->
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
          <form action="{{ route('pengajar.update', $pengajars) }}" method="POST" class="form-horizontal style-form" enctype="multipart/form-data">
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
            <label class="col-lg-2 control-label">Alamat</label>
            <div class="col-lg-10">
              <textarea class="form-control" id="alamat_lengkap" name="alamat_lengkap" rows="5" readonly="">{{ $pengajars->alamat_lengkap }}</textarea>                    
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Aktivitas</label>
            <div class="col-lg-10">
              <textarea class="form-control" id="aktivitas" name="aktivitas" rows="5">{{ $pengajars->aktivitas }}</textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Ceritakan Diri Anda</label>
            <div class="col-lg-10">                  
              <textarea class="form-control" id="ceritakan_diri" name="ceritakan_diri" rows="5">{{ $pengajars->ceritakan_diri }}</textarea>
            </div>
          </div>


          <div class="form-group last">
            <label class="control-label col-md-2">Foto Pribadi <span>*</span></label>
            <div class="col-md-9">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                  <img img data-enlargable width="200" style="cursor: zoom-in" src="{{url("pribadi/pengajar")}}/{{($pengajars->foto_pribadi) }}" alt="" />
                </div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                <div>
                  <span class="btn btn-theme02 btn-file">
                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                    <input type="file" name="foto_pribadi" class="default"/>
                  </span>
                  <a href="/asset1/advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                </div>
              </div>
              <span class="label label-info">NOTE!</span>
              <span>
                Hanya Untuk Upload File Berbentuk Foto
              </span>
            </div>
          </div>

          <div class="form-group last">
            <label class="control-label col-md-2">Foto Ktp <span>*</span></label>
            <div class="col-md-9">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                  <img img data-enlargable width="200" style="cursor: zoom-in" src="{{url("ktp/pengajar")}}/{{($pengajars->foto_ktp) }}" alt="" />
                </div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                <div>
                  <span class="btn btn-theme02 btn-file">
                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                    <input type="file" name="foto_ktp" class="default" />
                  </span>
                  <a href="/asset1/advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                </div>
              </div>
              <span class="label label-info">NOTE!</span>
              <span>
                Hanya Untuk Upload File Berbentuk Foto
              </span>
            </div>
          </div>

          <div class="form-group last">
            <label class="control-label col-md-2">Foto Ijazah <span>*</span></label>
            <div class="col-md-9">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                  <img img data-enlargable width="200" style="cursor: zoom-in" src="{{url("ijazah/pengajar")}}/{{($pengajars->foto_ijazah) }}" alt="" />
                </div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                <div>
                  <span class="btn btn-theme02 btn-file">
                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                    <input type="file" name="foto_ijazah" class="default" />
                  </span>
                  <a href="/asset1/advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                </div>
              </div>
              <span class="label label-info">NOTE!</span>
              <span>
                Hanya Untuk Upload File Berbentuk Foto
              </span>
            </div>
          </div>

          <div class="form-group last">
            <label class="control-label col-md-2">Foto Lainnya <span>*</span></label>
            <div class="col-md-9">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                  <img img data-enlargable width="200" style="cursor: zoom-in" src="{{url("lainnya/pengajar")}}/{{($pengajars->foto_lainnya) }}" alt="" />
                </div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                <div>
                  <span class="btn btn-theme02 btn-file">
                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                    <input type="file" name="foto_lainnya" class="default" />
                  </span>
                  <a href="/asset1/advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                </div>
              </div>
              <span class="label label-info">NOTE!</span>
              <span>
                Hanya Untuk Upload File Berbentuk Foto
              </span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-5 control-label"></label>
            <div class="col-lg-2">
              <button type="submit" class="btn-sm btn-success">Save</button>
              <button type="reset" class="btn-sm btn-warning">Reset</button>
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
