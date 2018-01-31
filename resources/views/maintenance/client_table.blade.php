@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>CLIENT TABLE</h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Client tables</li>
						<div class="pull-right">
							<button type="button" data-target=".bs-example-modal-full" class="btn btn-sm btn-green" data-toggle="modal"><i class="fa fa-plus"></i> New Client</a>
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
        <h4 class="modal-title" id="myModalLabel">Add Client</h4>
      </div>

      <!-- Modal Body -->
      <form action="{{ url('clients') }}" method="POST">
      {{ csrf_field() }}
      <div class="modal-body">
      	<div class="row">
			<div class="form-group">
				<div class="col-md-4">
					<label>First Name *</label>
					<input type="text" name="fname" value="" class="form-control required">
				</div>
				<div class="col-md-4">
					<label>Middle Name *</label>
					<input type="text" name="mname" value="" class="form-control required">
				</div>
				<div class="col-md-4">
					<label>Last Name *</label>
					<input type="text" name="lname" value="" class="form-control required"><br>
				</div><br>
				<div class="col-md-6">
					<label>Religion *</label>
					<select name="religion" class="form-control required" onchange="if (this.value=='others'){this.form['others'].style.visibility='visible'}else {this.form['others'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($religions as $religion)
      <option value="{{$religion->name}}">{{$religion->name}}</option>
    @endforeach
					<option value="others">Other</option>
					</select>
					<input type="textbox" name="others" class="form-control required" style="visibility:hidden;"/>
				</div>
				<div class="col-md-6">
					<label>Citizenship *</label><br>
					<select name="Citizenship" class="form-control required" onchange="if (this.value=='other'){this.form['other'].style.visibility='visible'}else {this.form['other'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($citizenships as $citizen)
      <option value="{{$citizen->name}}">{{$citizen->name}}</option>
    @endforeach
					<option value="other">Others</option>
					</select>
					<input type="textbox" name="other" class="form-control required" style="visibility:hidden;"/>
				</div>
				<div class="col-md-12">
					<label>Address *</label>
					<input type="text" name="Address" value="" class="form-control required"><br>
				</div>
				<div class="col-md-6">
					<label>Email *</label>
					<input type="text" name="Email" value="" class="form-control required">
				</div>
				<div class="col-md-6">
					<label>Birthday *</label>
					<input type="date" name="Birthday" value="" class="form-control required"><br>
				</div>
				<div class="col-md-6">
					<label>Contact Number *</label>
					<input type="text" name="Contact" value="" class="form-control required">
				</div>				
				<div class="col-md-6">
					<label>Monthly Income *</label>
					<input type="text" name="Income" value="" class="form-control required"><br>
				</div>
				<div class="col-md-6">
					<label>Language Spoken  *</label>
					<select name="Language" class="form-control required" onchange="if (this.value=='otherss'){this.form['otherss'].style.visibility='visible'}else {this.form['otherss'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($languages as $language)
      <option value="{{$language->name}}">{{$language->name}}</option>
    @endforeach
					<option value="otherss">Other</option>
					</select>
					<input type="textbox" name="otherss" class="form-control required" style="visibility:hidden;"/>
				
				</div>
				<div class="col-md-6">
					<label>Educational Attainment *</label>
					<select name="Educational" class="form-control required" onchange="if (this.value=='edu'){this.form['edu'].style.visibility='visible'}else {this.form['edu'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($educations as $education)
      <option value="{{$education->name}}">{{$education->name}}</option>
    @endforeach
					<option value="edu">Other</option>
					</select>
					<input type="textbox" name="edu" class="form-control required" style="visibility:hidden;"/>
				
				</div>
				<div class="col-md-6">
					<label>Gender *</label><br>
					<input type="radio" name="gender" value="male">Male
         			<input type="radio" name="gender" value="female"> Female<br><br><br>	
				</div>
				<div class="col-md-6">
					<label>Detained(?) </label><br>
					<input type="radio" onclick="javascript:DetainedCheck();" name="Detained" id="yesCheck">Yes <input type="radio" 
					onclick="javascript:DetainedCheck();" name="Detained" id="noCheck">No
    				<div id="ifYes" style="visibility:hidden">
        			Detained Since<input type="date" name="Detained" value="" class="form-control required">
        			Place of Detenstion<input type="text" name="Detained" value="" class="form-control required">
    				</div>
				</div>
				
				<div class="col-md-6">
					<label>Civil Status *</label><br>
					<input type="radio" name="civilstat" value="single"> Single
          			<input type="radio" name="civilstat" value="married"> Married
          			<input type="radio" name="civilstat" value="divorced"> Divorced
          			<input type="radio" name="civilstat" value="widowed"> Widowed
				</div>
			</div>
		</div>

 
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-green">Submit</button>
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
								<strong>CLIENTS</strong> <!-- panel title -->
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
										<th>Full Name</th>
										<th>Nature of Request</th>
										<th>Email</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
				
								<tbody>
								@foreach ($clients as $client)
									<tr>
									
										<td>
											 {{$client->cllname}}, {{$client->clfname}}, {{$client->clmname}}
										</td>
										<td>
											 {{$client->clcontact}}
										</td>
										<td class="center">
											 {{$client->clemail}}
										</td>
										<td>
											<a class="edit" href="javascript:;">
											Edit </a>
										</td>
										<td>
											<a class="delete" href="javascript:;">
											Delete </a>
										</td>
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