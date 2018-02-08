@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>DISTRIBUTE CASE</h1>
					
			</header>

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
					
						<!--<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="pull-right">
									<a href="#createprojects" class="btn btn-sm btn-green" data-toggle="modal"><i class="fa fa-plus"></i> New Request</a>
									
								</div>
							</div>
							
						</div>
						 panel content -->
						<div class="panel-body">
							<div class="container-fluid">
								<div class="col-md-6">
						<div class="card1">
								<div class="container">
									
										<form>
											<div class="form-group">
										<label>Case Name :</label>
										</div>
										<div class="form-group">
										<label>Interviewer :</label>
										</div>
										<div class="form-group">
										<label>Nature of Request :</label>
										</div>
										<div class="form-group">
										<label>Case Category :</label>
										</div>
										<div class="form-group">
										<label>Nature of Case :</label>
										</div>
										<div class="form-group">
										<label>Case Involvement :</label>
										</div>
											</form>
										</div>
										</div>
										</div>
								<div class="col-md-6">
							<div class="card">
								<div class="container">
									
								<h1>Lawyer Names</h1>
								<select style="width: 50%">
									<option></option>
									<option>Lawyer Names</option>
								</select>
								<br><br>
        						<button type="submit" style="align-items: center;" class="btn btn-green"/>Distribute
							</div>
	
								<br><br>
						</div><br>
						</div>
						
										</div>
						</div>
						<!-- /panel content -->

						<!-- panel footer -->
						


			
			</section>
@stop