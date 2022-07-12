@extends('layouts.app')
@section('content')



<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Data Materi </h3>        
    <!--ADVANCED FILE INPUT-->
    @include('layouts.app.message')
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
          <form action="{{ route('materi.store') }}" method="POST" class="form-horizontal style-form" enctype="multipart/form-data">
           @csrf 

           <div class="form-group last">
            <label class="control-label col-md-2">Foto Materi <span class="form-required">*</span></label>
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
                    <input type="file" name="foto_materi" class="default" />
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
            <label class="col-lg-2 control-label">Nama Materi <span class="form-required">*</span></label>
            <div class="col-lg-10">
              <input type="text" name="nama_materi" id="nama_materi" class="form-control" value="{{ old('nama_materi') }}">                    
            </div>
          </div>         

          <div class="form-group">
            <label class="col-lg-5 control-label"></label>
            <div class="col-lg-2">
              <button type="submit" class="btn-sm btn-success" class="form-control">Save</button>
              <button type="reset" class="btn-sm btn-warning" class="form-control">Reset</button>
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
@endsection