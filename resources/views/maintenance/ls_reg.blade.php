@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')  
@section('content')
<section id="middle">
<div class="container">
      <header><br>
        <h4 class="modal-title" id="myModalLabel">Add Language Spoken</h4><br>
      </header>
<br>
      <!-- Modal Body -->
      <form action="{{ url('/language/register') }}" method="POST">
      {{ csrf_field() }}
      	<div class="row">
			<div class="form-group">
				<div class="col-md-4">
					<label>Name *</label>
					<input type="text" name="name" value="" class="form-control required">
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