@extends('layouts.app')
@section('content')



<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Edit Data Materi </h3>        
    <!--ADVANCED FILE INPUT-->
    @include('layouts.app.message')
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
          <form action="{{ route('detailMateri.update', $id) }}" method="POST" class="form-horizontal style-form">
           @csrf 
           @method('PUT')
           <input type="hidden" name="id_pengajar" value="{{ $id }}">

          <div class="form-group">
            <label class="col-lg-2 control-label">Materi <span class="form-required">*</span></label>
            <div class="col-lg-10">              
              <select class="form-control" name="id_materi" id="id_materi">                
                @foreach($materis as $materi)
                <option value="{{ $materi->id }}" @if($detailMateris->id_materi == $materi->id) selected="" @endif>{{ $materi->nama_materi }}</option>
                @endforeach
              </select>

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