@extends('layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Edit Data Admin </h3>        
    <!--ADVANCED FILE INPUT-->
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
          <form action="{{ route('admin.update', $admins) }}" method="POST" class="form-horizontal style-form" enctype="multipart/form-data">
           @csrf 
           @method('PUT')           

          <div class="form-group">
            <label class="col-lg-2 control-label">Nama Admin <span class="form-required">*</span></label>
            <div class="col-lg-10">
              <input type="text" name="nama" id="nama" class="form-control" value="{{ $admins->nama }}">                    
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Username <span class="form-required">*</span></label>
            <div class="col-lg-10">
              <input type="text" name="username" id="username" class="form-control" value="{{ $admins->username }}">                    
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
