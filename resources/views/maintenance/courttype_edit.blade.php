@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')  
@section('content')
<section id="middle">
  <div class="container">
<header>
        <h4>Edit Court type</h4>
</header>
      <!-- Modal Body -->
      <form action="{{ route('editct', $courttypes->id) }}" method="POST">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      	<div class="row">
			<div class="form-group">
				<div class="col-md-4">
					<label>Name *</label>
					<input type="text" name="name" value="{{$courttypes->name}}" class="form-control required">
				</div>
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