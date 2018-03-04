@extends('master')

@section('content')
				<!-- /page title -->

				<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h1 style="text-align: center;">INTERVIEW SHEET/CLIENTS PROFILE</h1>
								</header>
								<div class="col-md" style="text-align: center;">
									<h5> Region NCR</h5>
									<h5> District Office Central Office</h5>
								</div>

								<div class="col-md-6 col-sm-6 text-left">

									<h5> Date: </h5>
									<h5> Control No: ___________________________________________</h5>
									<br>
									<h5> Interviewer: __________________________________________</h5>
									<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Name & Signature)</h5>
								</div>

								<div class="col-md-6 col-sm-6 text-right">

									<h5> Assigned to: ___________________________________________</h5>
									<h5> Referred/Indorsed by: __________________________________</h5>
									<h5> Refer to: ______________________________________________</h5>
									<h5>(Name & Signature) Public Attorney&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
									<h5> Approved by: ______________________________________________</h5>
									<h5>(Name & Signature) DPA / OIC-DPA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
								</div>
								</div>

							</div>	
						</div>
					</div>

					<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h3 style="text-align: center;">NATURE OF REQUEST(to be filled up by PAO personel)</h3>
								</header>

								<div class="col-md-4">
									<h5><input type="checkbox" name="advice"> Legal Advice</h5>
									<h5><input type="checkbox" name="inquest"> Inquest/Legal Assistance</h5>
								</div>

								<div class="col-md-4">
									<h5><input type="checkbox" name="documentation"> Legal Documentation</h5>
									<h5><input type="checkbox" name="mediation"> Mediation/Conciliation</h5>
								</div>

								<div class="col-md-4">
									<h5><input type="checkbox" name="quasi"> Representation in court/Quasi-judicial bodies</h5>
									<h5><input type="checkbox" name="administration"> Administration of oath</h5>
								</div>

								<div class="col-md-12" style="text-align: center;">
									<br>
									<h5><input type="checkbox" name="Others"> Others: ______________________________________________________</h5>
								</div>

							</div>

							</div>	
						</div>
					</div>

					<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h3 style="text-align: center;">CLIENT'S PERSONAL CIRCUMSTANCES</h3>
								</header>

								<div class="col-md-6 col-sm-6 text-left">

									<h5> Name: _________________________________________________</h5>
									<h5> Religion: _____________________________________________</h5>
									<h5> Citizenship: __________________________________________</h5>
									<h5> Address: ______________________________________________</h5>
									<h5> E-mail: _________________________________________________</h5>
									<h5> Individual Monthly Net Income: ________________________</h5>
									<h5> Detained: &nbsp;&nbsp;&nbsp;<input type="checkbox" name="Yes">Yes <input type="checkbox" name="No"> No</h5>
									<h5> Detained Since: _______________________________________</h5>
								</div>

								<div class="col-md-6 col-sm-6 text-right">
									<div class="col-md-3">
										<h5> Age: ________</h5>
									</div>
									<div class="col-md-3">
										<h5> Gender: ________</h5>
									</div>
									<div class="col-md-6">
										<h5> Civil Status: _____________________________</h5>
									</div>
									<div class="col-md-12">
									<h5> Educational Attainment: __________________________________________________________</h5>
									<h5> Language/Dialect: ________________________________________________________________</h5>
									<h5> Contact No.: _____________________________________________________________________</h5>
									<h5> Spouse: __________________________________________________________________________</h5>
									<h5> Address of Spouse: _______________________________________________________________</h5>
									<h5> Contact No. of Spouse: ___________________________________________________________</h5>
									<h5> Place of Detention: ______________________________________________________________</h5>
									</div>
								</div>

							</div>

							</div>	
						</div>
					</div>

					<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h3 style="text-align: center;">INTERVIEWEE'S PERSONAL CIRCUMSTANCES</h3>
								</header>

								<div class="col-md-6 col-sm-6 text-left">

									<h5> Name: _________________________________________________</h5>
									<h5> Address: ______________________________________________</h5>
									<h5> Relationship to client: _________________________________</h5>
								</div>

								<div class="col-md-6 col-sm-6 text-right">
									<div class="col-md-3">
										<h5> Age: ________</h5>
									</div>
									<div class="col-md-3">
										<h5> Gender: ________</h5>
									</div>
									<div class="col-md-6">
										<h5> Civil Status: _____________________________</h5>
									</div>
									<div class="col-md-12">
									<h5> Contact No.: _____________________________________________________________________</h5>
									<h5> E-mail: __________________________________________________________________________</h5>
									</div>
								</div>

							</div>

							</div>	
						</div>
					</div>

					<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h3 style="text-align: center;">NATURE OF THE CASE</h3>
								</header>

								<div class="col-md-4">
									<h5><input type="checkbox" name="criminal"> Criminal</h5>
									<h5> Pls. Specify: _______________</h5>
									<h5><input type="checkbox" name="administrative"> Administrative</h5>
									<h5> Pls. Specify: _______________</h5>
								</div>
								<div class="col-md-4">
									<h5><input type="checkbox" name="civil"> Civil</h5>
									<h5> _______________</h5>
									<h5><input type="checkbox" name="appeal"> Appeal</h5>
									<h5> _______________</h5>
								</div>
								<div class="col-md-4">
									<h5><input type="checkbox" name="labor"> Labor</h5>
									<h5> _______________</h5>
								</div>

							</div>

							</div>	
						</div>
					</div>
					<div id="content" class="padding-20">
					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h3 style="text-align: center;">CLIENT'S CASE INVOLVEMENT</h3>
								</header>

								<div class="col-md-3">
									<h5><input type="checkbox" name="plaintiff"> Plaintiff</h5>
									<h5><input type="checkbox" name="oppositor"> Oppositor</h5>
								</div>
								<div class="col-md-3">
									<h5><input type="checkbox" name="petitioner"> Oppositor</h5>
									<h5><input type="checkbox" name="accused"> Accused</h5>
								</div>
								<div class="col-md-3">
									<h5><input type="checkbox" name="defendant"> Accused</h5>
									<h5><input type="checkbox" name="others"> Others</h5>
								</div>
								<div class="col-md-3">
									<h5><input type="checkbox" name="respondent"> Respondent</h5>
								</div>
								<div class="col-md-12">
									<h5><input type="checkbox" name="of"> Complainant/Victim of:</h5>
								</div>
								<div class="col-md-4">
									<h5>a)&nbsp;&nbsp;&nbsp;<input type="checkbox" name="of"> R.A. 9262(VAWC)</h5>
									<h5>b)&nbsp;&nbsp;&nbsp;<input type="checkbox" name="of"> R.A. 9372(Human Security Act)</h5>
								</div>
								<div class="col-md-4">
									<h5>c)&nbsp;&nbsp;&nbsp;<input type="checkbox" name="of"> R.A. 9745(Anti-Torture Law)</h5>
									<h5>d)&nbsp;&nbsp;&nbsp;<input type="checkbox" name="of"> R.A. 9344(CICL)</h5>
								</div>
								<div class="col-md-4">
									<h5>e)&nbsp;&nbsp;&nbsp;<input type="checkbox" name="of"> Agrarian Case</h5>
									<h5>f)&nbsp;&nbsp;&nbsp;<input type="checkbox" name="of"> Others</h5>
								</div>
							</div>
							</div>	
						</div>
					</div>
					<div id="content" class="padding-20">

						<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h3 style="text-align: center;">CLIENT'S CASE INVOLVEMENT</h3>
								</header>

								<div class="col-md-3">
									<h5><input type="checkbox" name="plaintiff"> Plaintiff</h5>
									<h5><input type="checkbox" name="oppositor"> Oppositor</h5>
								</div>
								<div class="col-md-3">
									<h5><input type="checkbox" name="petitioner"> Oppositor</h5>
									<h5><input type="checkbox" name="accused"> Accused</h5>
								</div>
								<div class="col-md-3">
									<h5><input type="checkbox" name="defendant"> Accused</h5>
									<h5><input type="checkbox" name="others"> Others</h5>
								</div>
								<div class="col-md-3">
									<h5><input type="checkbox" name="respondent"> Respondent</h5>
								</div>
								<div class="col-md-11">
									<h5><input type="checkbox" name="of"> Complainant/Victim of:</h5>
								</div>
								<div class="col-md-4">
									<h5>a)&nbsp;&nbsp;&nbsp;<input type="checkbox" name="of"> R.A. 9262(VAWC)</h5>
									<h5>b)&nbsp;&nbsp;&nbsp;<input type="checkbox" name="of"> R.A. 9372(Human Security Act)</h5>
								</div>
								<div class="col-md-4">
									<h5>c)&nbsp;&nbsp;&nbsp;<input type="checkbox" name="of"> R.A. 9745(Anti-Torture Law)</h5>
									<h5>d)&nbsp;&nbsp;&nbsp;<input type="checkbox" name="of"> R.A. 9344(CICL)</h5>
								</div>
								<div class="col-md-4">
									<h5>e)&nbsp;&nbsp;&nbsp;<input type="checkbox" name="of"> Agrarian Case</h5>
									<h5>f)&nbsp;&nbsp;&nbsp;<input type="checkbox" name="of"> Others</h5>
								</div>
							</div>
							</div>
							</div>	
						</div>

					<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h2 style="text-align: center;">CLIENT'S CLASSIFICATION </h2>
								</header>

								<div class="col-md-6 col-sm-6 text-left">

									<h5> <input type="checkbox" name="children"> Children in Conflict with the law</h5>
									<h5> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age: ____________________________</h5>
									<h5> <input type="checkbox" name="women"> Women Client</h5>
									<h5> <input type="checkbox" name="group"> Indigenous Group</h5>
									<h5> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please specify: ____________________________</h5>
									<h5> <input type="checkbox" name="pwd"> Person with Disability (PWD)</h5>
									<h5> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type of Disability: ____________________________</h5>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="col-md-12">
									<h5> <input type="checkbox" name="urban"> Urban Poor</h5>
									<h5> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please specify: ____________________________</h5>
									<h5> <input type="checkbox" name="rural"> Rural Poor</h5>
									<h5> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please specify: ____________________________</h5>
									<h5> <input type="checkbox" name="refugees"> Refugees/Evacuees</h5>
									<h5> <input type="checkbox" name="senior"> Senior Citizen</h5>
									</div>
									<div class="col-md-4">
										<h5> <input type="checkbox" name="ofw"> OFW</h5>
									</div>
									<div class="col-md-4">
										<h5> <input type="checkbox" name="land"> Land-based</h5>
									</div>
									<div class="col-md-4">
										<h5> <input type="checkbox" name="sea"> Sea-based</h5>
									</div>
								</div>
								</div>

							</div>	
						</div>
					</div>

					<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h2 style="text-align: center;">ADVERSE PARTY </h2>
								</header>

								<div class="col-md-6 col-sm-6 text-left">

									<h5> <input type="checkbox" name="complain"> Plaintiff/Petitioner/Complainant</h5>
									<h5> <input type="checkbox" name="defend"> Defendant/Respondent/Accused</h5>
									<h5> NAME: _______________________________________________<br>_______________________________________________________<br>_______________________________________________________</h5>
								</div>
								<div class="col-md-6 col-sm-6">
									<h5>
										<input type="checkbox" name="oppose"> Oppositor/Others
									</h5><br><br>
									<h5>ADDRESS _______________________________________________<br>_______________________________________________________<br>_______________________________________________________</h5>
								</div>
								</div>

							</div>	
						</div>
					</div>

					<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h2 style="text-align: center;">FACTS OF THE CASE </h2>
								</header>

								<div class="col-md-12 col-sm-12">
									<p>_________________________________________________________________________________________________________________________________________________________________________________________________<br>_________________________________________________________________________________________________________________________________________________________________________________________________<br>_________________________________________________________________________________________________________________________________________________________________________________________________<br></p>
								</div>

							</div>	
						</div>
					</div>
				</div>

				<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h2 style="text-align: center;">CAUSE OF ACTION/NATURE OF OFFENSE</h2>
								</header>

								<div class="col-md-12 col-sm-12">
									<p>_________________________________________________________________________________________________________________________________________________________________________________________________<br>_________________________________________________________________________________________________________________________________________________________________________________________________<br>_________________________________________________________________________________________________________________________________________________________________________________________________<br></p>
								</div>

							</div>	
						</div>
					</div>
				</div>

				<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h2 style="text-align: center;">OTHER RELATED PENDING/CONCLUDED CASE(S) </h2>
								</header>

								<div class="col-md-12">
									<h5>Cause of Action/Nature of offense: ____________________________________________________________________________________________________________________________________________________________<br>________________________________________________________________________________________________________________________________________________________________________________________________<br></h5>
									<h5>Court/Body/Tribunal: __________________________________________________________________________________________________________________________________________________________________________</h5>
								</div>

							</div>	
						</div>
					</div>
				</div>

				<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h2 style="text-align: center;">PROOF OF INDIGENCY SUBMITTED</h2>
								</header>

								<div class="col-md-3">
									<input type="checkbox" name="income"> Income Tax Return
								</div>
								<div class="col-md-3">
									<input type="checkbox" name="barangay"> Certification from Barangay
								</div>
								<div class="col-md-3">
									<input type="checkbox" name="certification"> Certification (DSWD)
								</div>
								<div class="col-md-3">
									<input type="checkbox" name="others"> Others(payslips, etc.)
								</div>
								<div class="col-md-6">
									
								</div>
								<div class="col-md-6"><br><br>
									<h5 style="text-align: center;">________________________________</h5>
									<h5 style="text-align: center;">Party/Representative</h5>
								</div>
							</div>	
						</div>
					</div>
				</div>

				<div id="content" class="padding-20">

					<div class="panel panel-default">
						<div class="panel-body">

							<div class="row" style="margin-left: 15px;margin-right: 15px;">
								<header>
									<h2 style="text-align: center;">AFFIDAVIT OF INDIGENCY</h2>
								</header>
								<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I,_____________________________________________________ of legal age, <input type="checkbox" name="single"> single <input type="checkbox" name="married"> married to: ______________________________________________ <input type="checkbox" name="widow"> widow <input type="checkbox" name="widower"> widower and residing at _______________________________________________________ and having been duly sworn in accordance with law, depose and say:</h5><br>
								<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. That I desire to avail of the free legal service of the Public Attorney's Office:</h5>
								<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. That my monthly salary/income is P___________________________</h5>
								<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. That I am executing this affidavit to entitle me to the desired legal services</h5>
								<div class="col-md-6 col-sm-6 text-left"></div>
								<div class="col-md-6 col-sm-6 text-right">
									<h5>__________________________________________</h5>
									<h5>Signature of Affiant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
								</div>
								<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SUBSCRIBED AND SWORN to before me this _________ day of ____________________________ 20______ in ______________________________________________________________, Philippines, and I have read and translated the foregoing Affidavit to a dialect understood by the affiliant.<br><br><br><br><br><br></h5>
							</div>	
						</div>
					</div>
				</div>

					<div class="panel panel-default text-right">
						<div class="panel-body">
							<a class="btn btn-warning" href="#"><i class="fa fa-pencil-square-o"></i> EDIT</a>
							<a class="btn btn-primary" href="#"><i class="fa fa-check"></i> SAVE</a>
							<a class="btn btn-success" href="page-invoice-print.html" target="_blank"><i class="fa fa-print"></i> PRINT INVOICE</a>
						</div>
					</div>

				</div>
@stop