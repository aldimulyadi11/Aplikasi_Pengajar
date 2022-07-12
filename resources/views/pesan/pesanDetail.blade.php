@extends('layouts.app')
@section('content')



<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i>Contact Us</h3>        
    <!--ADVANCED FILE INPUT-->
    @include('layouts.app.message')
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
          <form action="{{ route('pesan.store3', $id) }}" method="POST" class="form-horizontal style-form" enctype="multipart/form-data">
           @csrf            

           <div class="form-group">
            <label class="col-lg-2 control-label">Nama <span class="form-required">*</span></label>
            <div class="col-lg-10">
              <input type="text" name="nama" id="nama" class="form-control" readonly="" value="{{ $pesan->nama }}">                    
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Email <span class="form-required">*</span></label>
            <div class="col-lg-10">
              <input type="email" name="email" id="email" class="form-control" readonly="" value="{{ $pesan->email }}">                    
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Subject <span class="form-required">*</span></label>
            <div class="col-lg-10">                    
              <textarea class="form-control" readonly="" id="subject" name="subject" rows="5">{{ $pesan->subject }}</textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Pesan <span class="form-required">*</span></label>
            <div class="col-lg-10">                    
              <textarea class="form-control" readonly="" id="pesan" name="pesan" rows="5">{{ $pesan->pesan }}</textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-5 control-label"></label>
            <div class="col-lg-12">
              <center><button type="submit" class="btn-sm btn-info">Konfirmasi</button></center>
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