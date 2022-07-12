@extends('layouts.app')
@section('content')



<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Data Admin </h3>        
    <!--ADVANCED FILE INPUT-->
    @include('layouts.app.message')
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
          <form action="{{ route('admin.store') }}" method="POST" class="form-horizontal style-form" enctype="multipart/form-data">
           @csrf            

          <div class="form-group">
            <label class="col-lg-2 control-label">Nama Admin <span class="form-required">*</span></label>
            <div class="col-lg-10">
              <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}">                    
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Username <span class="form-required">*</span></label>
            <div class="col-lg-10">
              <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}">                    
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Password <span class="form-required">*</span></label>
            <div class="col-lg-10">
              <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">                    
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Confirmation Password <span class="form-required">*</span></label>
            <div class="col-lg-10">
              <input type="password" name="confir_password" id="confir_password" class="form-control" value="{{ old('confir_password') }}">                    
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