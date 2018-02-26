@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')
<section id="middle">
	<div class="container">
<header>
       <br>
        <h4>Add Employee</h4><br>
 </header>

      <!-- Modal Body -->
      <form action="{{ url('employees') }}" method="POST">
      {{ csrf_field() }}
      	<div class="row">
			<div class="form-group">
				<div class="col-md-4">
					<label>First Name *</label>
					<input type="text" name="efname" value="" class="form-control "required>
				</div>
				<div class="col-md-4">
					<label>Middle Name </label>
					<input type="text" name="emname" value="" class="form-control ">
				</div>
				<div class="col-md-4">
					<label>Last Name *</label>
					<input type="text" name="elname" value="" class="form-control "required>
				</div>
				<div class="col-md-4">
					<label>E-mail *</label>
					<input type="email" name="email" value="" class="form-control "required>
				</div>
				<div class="col-md-4">
					<label>Position *</label>
					<select name="position" class="form-control " required onchange="if (this.value=='edu'){this.form['edu'].style.visibility='visible'}else {this.form['edu'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($positions as $position)
      <option value="{{$position->name}}">{{$position->name}}</option>
    @endforeach
					{{-- <option value="edu">Other</option> --}}
					</select>
					<input type="textbox" name="edu" class="form-control required" style="visibility:hidden;"/>
				
				</div>
				</div>
				<div class="col-md-4">
					<label>Contact No. *</label>
					<input type="number" name="contact" value="" class="form-control "required>
				</div>
				
				
			</div>
	

    

      <!-- Modal Footer -->
      <footer>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-green">Submit</button>
     </footer>

    </div>
  </div>
</div>
</form>
</div>
</section>
@stop