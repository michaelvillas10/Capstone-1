@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>CASE </h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Case </li>
						<div class="pull-right">
							<button type="button" data-target=".bs-example-modal-full" class="btn btn-sm btn-green" data-toggle="modal"><i class="fa fa-plus"></i>New Case</a>
						</div>
					</ol>
				</header>
				<!-- /page title -->
<div class="modal fade bs-example-modal-full" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-full">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Case</h4>
      </div>

      <!-- Modal Body -->
      <form action="{{ url('lawsuits') }}" method="POST">
      {{ csrf_field() }}
      <div class="modal-body">
      	<div class="row">
			<div class="form-group">
				<div class="col-md-4">
					<label>Case Name *</label>
					<input type="text" name="name" value="" class="form-control required">
				</div>
				
			</div>
		</div>

 
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-green">Save changes</button>
      </div>

    </div>
  </div>
</div>
</form>
				<div id="content" class="padding-20">

					<!-- 
						PANEL CLASSES:
							panel-default
							panel-danger
							panel-warning
							panel-info
							panel-success

						INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
								All pannels should have an unique ID or the panel collapse status will not be stored!
					-->
					<div id="panel-1" class="panel panel-default">
						<div class="panel-heading">
							<span class="title elipsis">
								<strong>CASE</strong> <!-- panel title -->
							</span>

							<!-- right options -->
							<ul class="options pull-right list-inline">
								<li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
								<li><a href="#" class="opt panel_fullscreen hidden-xs" data-toggle="tooltip" title="Fullscreen" data-placement="bottom"><i class="fa fa-expand"></i></a></li>
								<li><a href="#" class="opt panel_close" data-confirm-title="Confirm" data-confirm-message="Are you sure you want to remove this panel?" data-toggle="tooltip" title="Close" data-placement="bottom"><i class="fa fa-times"></i></a></li>
							</ul>
							<!-- /right options -->

						</div>
						<!--<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="pull-right">
									<a href="#createprojects" class="btn btn-sm btn-green" data-toggle="modal"><i class="fa fa-plus"></i> New Request</a>
									
								</div>
							</div>
							
						</div>
						 panel content -->
						<div class="panel-body">
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>Name</th>
										<th>Case To Be Handled</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
<tbody>
								@foreach ($lawsuits as $lawsuit)
									<tr>
										<td>
											 {{$lawsuit->name}}
										</td>
										<td>
											 {{$lawsuit->casetobehandleds_id}}
										</td>
										<td>
											  <button type="submit" data-target=".bs-example-modal-update{{ $lawsuit->id }}" class="btn btn-sm btn-warning update-button" data-toggle="modal" ><i class="fa fa-pencil"></i> Edit</a>
										</td>
										<td>
											<form action="{{ url('lawsuits',$lawsuit->id) }}" method = "post">
												{{ csrf_field() }}
        {{ method_field('DELETE') }}
											<button type ="submit" class="btn btn-danger delete-user" onclick="return confirm('Are you sure?')" href="{{ url('lawsuits',$lawsuit->id) }}"><i class="fa fa-trash"></i>
											Delete </button>
										</form>
										</td>
<div class="modal fade bs-example-modal-update{{ $lawsuit->id }}" id =".bs-example-modal-update" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-full">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Case</h4>
      </div>

      <!-- Modal Body -->
      <form id="update-language-form" action="{{ url('lawsuits',$lawsuit->id) }}" method="post">
      {{ csrf_field() }}
       <input type="hidden" name="_method" value="PUT">
       <div class="modal-body">
      	<div class="row">
			<div class="form-group">
				<div class="col-md-4">
					<label>Case Name *</label>
					<input type="text" name="name" value="{{$lawsuit->name}}" class="form-control required">
				</div>
				<div class="col-md-4">
					<label>Case To Be Handled(ID) *</label>
					<input type="text" name="casetobehandleds_id" value="{{$lawsuit->casetobehandleds_id}}" class="form-control required">
				</div>
			</div>
		</div>

 
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-green">Save changes</button>
      </div>

    </div>
  </div>
</div>
</form>
									</tr>
									@endforeach	
								</tbody>
							</table>

						</div>
						<!-- /panel content -->

						<!-- panel footer -->

					</div>
					<!-- /PANEL -->

				</div>
			</section>
@stop