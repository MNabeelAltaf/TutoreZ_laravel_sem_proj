@if(session('Message'))




<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  {{ session('Message') }}
</div>



@endif