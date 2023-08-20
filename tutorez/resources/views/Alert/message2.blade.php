@if(session('Message'))




<div class="alert alert-success alert-dismissible">
  
<h2 style="background-color:skygreen; color:green; text-align:center;">
  {{ session('Message') }}
</h2>
</div>



@endif