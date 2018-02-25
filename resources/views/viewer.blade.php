@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')
<section><br>
				<div class="container">
					<ul class="nav nav-tabs">
						<li><a href="#clientp">Client Personal Information</a></li>
						<li><a href="#clientm">Client  Marital Details</a></li>
						<li><a href="#clientd">Client Dentention Details</a></li>
						<li><a href="#case">Case</a></li>
						<li><a href="#adverse">Adverse Party</a></li>
					</ul>

					@foreach($alls as $a)
						<div id="clientp" class="tab-content">
							<div class="card1">
							<div class="container">
										<div class="form-group">
										<label>Client Name :{{$a->clfname}} {{$a->clmname}} {{$a->cllname}}</label>
										</div>
										<div class="form-group">
										<label>Address :{{$a->claddress}}</label>
										</div>
										<div class="form-group">
										<label>Email :{{$a->clemail}}</label>
										</div>
										<div class="form-group">
										<label>Contact number :{{$a->clcontact_no}}</label>
										</div>
										<div class="form-group">
										<label>Gender :{{$a->clgender}}</label>
										</div>
										<div class="form-group">
										<label>Civil Status :{{$a->clcivil_status}}</label>
										</div>
										<div class="form-group">
										<label>Religion :{{$a->clreligion}}</label>
										</div>
										<div class="form-group">
										<label>Citizenship :{{$a->clcitizenship}}</label>
										</div>
										<div class="form-group">
										<label>Language Spoken :{{$a->cllanguage}}</label>
										</div>
										<div class="form-group">
										<label>Birthdate :{{date('M j Y'),$a->clbdate}}</label>
										</div>
										<div class="form-group">
										<label>Highest Educational Attainment :{{$a->cleducational_attainment}}</label>
										</div>
										<div class="form-group">
										<label>Monthly Net Income :{{$a->clmonthly_net_income}}</label>
										</div>
										<div class="form-group">
										<label>Nature of Request :{{$a->nature_of_request}}</label>
										</div>
										

							</div>
							</div>								
						</div>
						<div id="clientm" class="tab-content">
							<div class="card1">
							<div class="container">
										<div class="form-group">
										<label>Spouse :{{$a->clspouse}}</label>
									</div>
										<div class="form-group">
										<label>Address of Spouse :{{$a->claddress_of_spouse}}</label>
										</div>
										<div class="form-group">
										<label>Contact number of Spouse :{{$a->clcontact_no_of_spouse}}</label>
										</div>
							</div>
							</div>								
						</div>
						<div id="clientd" class="tab-content">
							<div class="card1">
							<div class="container">
										<div class="form-group">
										<label>Detained :{{$a->cldetained}}</label>
									</div>
										<div class="form-group">
										<label>Detained Since :{{$a->cldetained_since}}</label>
										</div>
										<div class="form-group">
										<label>Place of Detention :{{$a->clplace_of_detention}}</label>
										</div>
							</div>
							</div>								
						</div>
						<div id="case" class="tab-content">
							<div class="card1">
							<div class="container">
										<div class="form-group">
										<label>Case Name :{{$a->casetobehandled->casename}}</label>
										</div>
										<div class="form-group">
										<label>Interviewer :{{$a->casetobehandled->interviewer}}</label>
										</div>
										<div class="form-group">
										<label>Case Category :{{$a->casetobehandled->clcomplainant_victim_of}}</label>
										</div>
										<div class="form-group">
										<label>Nature of Case :{{$a->casetobehandled->nature_of_case}}</label>
										</div>
										<div class="form-group">
										<label>Case Involvement :{{$a->casetobehandled->clcase_involvement}}</label>
										</div>
							</div>
							</div>								
						</div>
						<div id="adverse" class="tab-content">
							<div class="card1">
							<div class="container">
										<div class="form-group">
										<label>Adverse Type :{{$a->adverse->advprtytype}}</label>
										</div>
										<div class="form-group">
										<label>Adverse party name :{{$a->adverse->advprtyfname}} {{$a->adverse->advprtymname}} {{$a->adverse->advprtylname}}</label>
										</div>
										<div class="form-group">
										<label>Adverse party address :{{$a->adverse->advprtyaddress}}</label>
										</div>
										
							</div>
							</div>								
						</div>
					</div>
				@endforeach
			</section>
@stop