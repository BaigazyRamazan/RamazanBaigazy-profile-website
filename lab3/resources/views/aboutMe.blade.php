<!DOCTYPE html>
<html>
<head>
	<title>About Me</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
</head>
<body>
	<div class="header">
		<div>
			<a href="{{route('main',app()->getLocale())}}">{{__("Home")}}</a>
		</div>
		<div>
			<p id="active">{{__("About Me")}}</p>
		</div>
		<div>
			<a href="{{route('contactMe',app()->getLocale())}}">{{__("Contact Me")}}</a>
		</div>
		<div class="nav-item">
			<a href="{{route(Route::currentRouteName(),'en')}}" class="">EN</a>
			<a href="{{route(Route::currentRouteName(),'ru')}}" class="">RU</a>
			<a href="{{route(Route::currentRouteName(),'kz')}}" class="">KZ</a>
		</div>
	</div>
	<div class="body">
		<div class="personal">
			<h1>{{__("Personal Information")}}</h1>
			<br>
			<dl>
				<dt>{{__("Name")}}:</dt>
					<dd>{{__("Ramazan")}}</dd>
				<dt>{{__("Surname")}}:</dt>
					<dd>{{__("Baigazy")}}</dd>
				<dt>{{__("Citizenship")}}:</dt>
					<dd>{{__("Kazakhstan")}}</dd>
				<dt>{{__("Place of Birth")}}:</dt>
					<dd>{{__("Aktobe")}}:</dd>
				<dt>{{__("Date of Birth")}}:</dt>
					<dd>04.12.01</dd>
				<dt>{{__("Hobbies")}}:</dt>
					<dd>{{__("Playing computer games,reading,watching animes")}}</dd>
			</dl>
		</div>
		<div class="skill">
			<h1>{{__("Skills")}}</h1>
			<br>
			<p>{{__("I have no bad habits and I'm good at team working.")}}</p>

			<h2>{{__("Languages that I learned")}}</h2>
			<div class="progress">
			  <div class="progress-bar" role="progressbar" aria-valuenow="70"
			  aria-valuemin="0" aria-valuemax="100" style="width:70%">
			    Java(70%)
			  </div>
			</div>
			<br>
			<div class="progress">
			  <div class="progress-bar" role="progressbar" aria-valuenow="90"
			  aria-valuemin="0" aria-valuemax="100" style="width:90%">
			    HTML and CSS(90%)
			  </div>
			</div>
			<br>
			<div class="progress">
			  <div class="progress-bar" role="progressbar" aria-valuenow="40"
			  aria-valuemin="0" aria-valuemax="100" style="width:40%">
			    JavaScript(40%)
			  </div>
			</div>
			<br>
			<div class="progress">
			  <div class="progress-bar" role="progressbar" aria-valuenow="50"
			  aria-valuemin="0" aria-valuemax="100" style="width:50%">
			    MS SQL SERVER(50%)
			  </div>
			</div>
			<br>
			<div class="progress">
			  <div class="progress-bar" role="progressbar" aria-valuenow="20"
			  aria-valuemin="0" aria-valuemax="100" style="width:20%">
			    C++(20%)
			  </div>
			</div>
			<br>
			<div class="progress">
			  <div class="progress-bar" role="progressbar" aria-valuenow="20"
			  aria-valuemin="0" aria-valuemax="100" style="width:20%">
			    Oracle PL/SQL(20%)
			  </div>
			</div>
			<br>
			<div class="progress">
			  <div class="progress-bar" role="progressbar" aria-valuenow="10"
			  aria-valuemin="0" aria-valuemax="100" style="width:10%">
			    Kotlin(10%)
			  </div>
			</div>
			<br>
		</div>
	</div>
</body>
</html>