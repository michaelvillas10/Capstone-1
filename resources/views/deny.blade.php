<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		* { margin: 0; padding: 0; }
		@page { size: 210mm 74.25mm; }
		body{
			background-color: #34495E;
			color: white;
			font-family: monospace;
		}
		#qrimg img{
			position: absolute;
			width: 70mm;
			height: 74.25mm;
			z-index: -1;
		}
		#infowrapper{
			position: relative;
			text-align: center;
			width: 130mm;
			left: 75mm;
			top: 15mm;
		}
		#name h1{
			font-size: 25px;
		}
		#name p{
			margin-bottom: 10%;
		}

		#companyname h1{
			font-size: 20px;
		}
		#companyname p{
			margin-bottom: 10%;
		}

		#designation h1{
			font-size: 15px;
		}
		#designation p{
			margin-bottom: 10%;
		}
	</style>
</head>
<body>
	{{-- <img src="http://via.placeholder.com/350x150" id="qrimg"> --}}
		<div id="infowrapper">
		<div id="name">
			<h1>{{ucwords($name)}}</h1>
			<p>(Client Name)</p>
		</div>
		<div id="companyname">
			<h1>{{ucwords($reason)}}</h1>
			<p>(Reason)</p>
		</div>
			
	</div>
</body>
</html>