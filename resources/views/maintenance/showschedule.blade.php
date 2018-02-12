@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">


				<!-- page title -->
			
				<!-- /page title -->
<div>
	<div class="modal-dialog modal-full">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
      
        <h4 class="modal-title" id="myModalLabel">Add Schedule</h4>
      </div>

      <!-- Modal Body -->
      <form action="{{ url('schedule/register') }}"  method="POST">
      {{ csrf_field() }}
      <div class="modal-body">
      	<div class="row">
			<div class="form-group">
				<div class="col-md-4">
					<label> Name *</label>
					<input type="text" name="name" value="" class="form-control "required>
				</div>
				<div class="col-md-4">
					<label>Start date and time </label>
					<input type="text" name="start" id="demo"/>
				</div>
				<div class="col-md-4">
					<label>End date and time</label>
					<input type="text" name="end" value="" class="form-control "required><br>
				</div><br>
				
		</div>

 
      
      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-green ">Next</button>
         
      </div>
</form>

    </div>
  </div>
</div>






			
		<script type="text/javascript">
   $(document).ready(function() {
        	$.datetimepicker.setLocale('pt-BR');
       	$('#demo').datetimepicker();
      });
   
   </script>



						
</section>		
@stop