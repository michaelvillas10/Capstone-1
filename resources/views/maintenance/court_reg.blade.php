@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')  
@section('content')
<section id="middle">
  <div class="container">
<header><br>
        <h4>Add Court </h4>
</header>
      <!-- Modal Body -->
      <form action="{{ url('court/register') }}" method="POST">
      {{ csrf_field() }}
      	<div class="row">
			<div class="form-group">
				<div class="col-md-4">
					<label>Name *</label>
					<input type="text" name="name" value="" class="form-control " required>
				</div>
				<div class="col-md-4">
					<label>Court type *</label>
					<select name="type" class="form-control " required onchange="if (this.value=='edu'){this.form['edu'].style.visibility='visible'}else {this.form['edu'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($courttypes as $ct)
      <option value="{{$ct->name}}">{{$ct->name}}</option>
    @endforeach
					{{-- <option value="edu">Other</option> --}}
					</select>
				</div>
				
		</div>

  </div>


      <!-- Modal Footer -->
      <footer>
        <button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
        <button type="submit" class="btn btn-green">Submit</button>
      </footer>

    </div>
  </div>
</div>
</form>
</div>
</section>
@stop