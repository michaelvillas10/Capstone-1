@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')  
@section('content')
<section id="middle">
  <div class="container">
<header><br>
        <h4>Add Case</h4>
</header>
      <!-- Modal Body -->
      <form action="{{ url('lawsuit/register') }}" method="POST">
      {{ csrf_field() }}
      	<div class="row">
			<div class="form-group">
				<div class="col-md-4">
					<label>Name *</label>
					<input type="text" name="name" value="" class="form-control required"><br>
          <label>Case to be handled (ID) *</label>
          <input type="text" name="casetobehandleds_id" value="" class="form-control required">
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