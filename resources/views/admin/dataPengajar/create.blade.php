@extends('layouts.app')
@section('content')

<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Registrasi </h3>        
    <!--ADVANCED FILE INPUT-->
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
          <form action="{{ route('pengajar.store') }}" method="POST" class="form-horizontal style-form" enctype="multipart/form-data">
           @csrf 
           <div class="form-group">
            <label class="col-lg-2 control-label">Nama Lengkap <span class="form-required">*</span></label>
            <div class="col-lg-10">
              <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="{{ old('nama_lengkap') }}">                    
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Nama Panggilan <span class="form-required">*</span></label>
            <div class="col-lg-10">
              <input type="text" name="nama_panggilan" id="nama_panggilan" class="form-control" value="{{ old('nama_panggilan') }}">                    
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Email <span class="form-required">*</span></label>
            <div class="col-lg-10">
              <input type="email" name="email_pengajar" id="email_pengajar" class="form-control" value="{{ old('email_pengajar') }}">                    
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">No. Telepon <span class="form-required">*</span></label>
            <div class="col-lg-10">
              <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ old('no_hp') }}">                    
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Kode Pos <span class="form-required">*</span></label>
            <div class="col-lg-10">
              <input type="text" name="kode_pos" id="kode_pos" class="form-control" value="{{ old('kode_pos') }}">                    
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Pendidikan Terakhir <span class="form-required">*</span></label>
            <div class="col-lg-10">
              <input type="text" name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control" value="{{ old('pendidikan_terakhire') }}">                    
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Alamat <span class="form-required">*</span></label>
            <div class="col-lg-10">                    
              <textarea class="form-control" id="alamat_lengkap" name="alamat_lengkap" rows="5">{{ old('alamat_lengkap') }}</textarea>                   
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Aktivitas <span class="form-required">*</span></label>
            <div class="col-lg-10">                    
              <textarea class="form-control" id="aktivitas" name="aktivitas" rows="5">{{ old('aktivitas') }}</textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Ceritakan Diri Anda <span class="form-required">*</span></label>
            <div class="col-lg-10">                    
              <textarea class="form-control" id="ceritakan_diri" name="ceritakan_diri" rows="5">{{ old('ceritakan_diri') }}</textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Materi </label>
            <div class="col-lg-10">
              <select class="form-control" name="id_materi" id="id_materi">
                <option class="form-control">-- Pilih Materi -- </option>
                @foreach($materi as $materis)
                <option class="form-control" value="{{ $materis->id }}">{{ $materis->nama_materi }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group last">
            <label class="control-label col-md-2">Foto Pribadi <span class="form-required">*</span></label>
            <div class="col-md-9">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                  <img src="/asset1/http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                </div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                <div>
                  <span class="btn btn-theme02 btn-file">
                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                    <input type="file" name="foto_pribadi" class="default" />
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
            <label class="control-label col-md-2">Foto KTP <span class="form-required">*</span></label>
            <div class="col-md-9">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                  <img src="/asset1/http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
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
            <label class="control-label col-md-2">Foto Ijazah <span class="form-required">*</span></label>
            <div class="col-md-9">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                  <img src="/asset1/http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
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
            <label class="control-label col-md-2">Foto Lainnya <span class="form-required">*</span></label>
            <div class="col-md-9">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                  <img src="/asset1/http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
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
            <label class="col-lg-2 control-label">Status </label>
            <div class="col-lg-10">
              <select class="form-control" name="status">
                <option value="AKTIF">Aktif</option>
                <option value="TIDAK AKTIF">Tidak Aktif</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-5 control-label"></label>
            <div class="col-lg-2">
              <button type="submit" class="btn btn-success" class="form-control">Save</button>
              <button type="reset" class="btn btn-warning" class="form-control">Reset</button>
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
  $("#id_materi").select2();
</script>
@endsection




