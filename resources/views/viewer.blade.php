@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')
<section><br>
				<div class="container">
					<ul class="nav nav-tabs">
						<li><a href="#client">Client</a></li>
						<li><a href="#case">Case to be Handled</a></li>
						<li><a href="#adverse">Adverse</a></li>
					</ul>

					
						<div id="client" class="tab-content">
							<div class="card1">
							<div class="container">
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
							</div>
							</div>								
						</div>
						<div id="case" class="tab-content">
							<div class="card1">
							<div class="container">
										<div class="form-group">
										<label>Cases :</label>
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
							</div>
							</div>								
						</div>
						<div id="adverse" class="tab-content">
							<div class="card1">
							<div class="container">
										<div class="form-group">
										<label>Casesss :</label>
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
							</div>
							</div>								
						</div>
					</div>
				
			</section>
@stop