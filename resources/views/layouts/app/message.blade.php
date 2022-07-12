@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
@if(\Session::has('alert'))
<div class="alert alert-danger">
  <div>{{Session::get('alert')}}</div>
</div>
@endif

@if(\Session::has('alert-success'))
<div class="alert alert-success">
  <div>{{Session::get('alert-success')}}</div>
</div>
@endif