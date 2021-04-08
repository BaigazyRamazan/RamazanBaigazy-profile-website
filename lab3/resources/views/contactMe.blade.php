<!DOCTYPE html>
<html>
<head>
	<title>Contact Me</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body style="background-color: black">
	<div class="header">
		<div>
			<a href="{{route('main',app()->getLocale())}}">{{__("Home")}}</a>
		</div>
		<div>
			<a  href="{{route('aboutMe',app()->getLocale())}}">{{__("About Me")}}</a>
		</div>
		<div>
			<p id="active">{{__("Contact Me")}}</p>
		</div>
		<div class="nav-item">
			<a href="{{route(Route::currentRouteName(),'en')}}" class="">EN</a>
			<a href="{{route(Route::currentRouteName(),'ru')}}" class="">RU</a>
			<a href="{{route(Route::currentRouteName(),'kz')}}" class="">KZ</a>
		</div>
	</div>
	<div class="footer">
		<h4>{{__("Get in touch")}}</h4>
<!-- 		<br>
		<br>
		<br> -->
		<h1>{{__("Contact")}}</h1>
		<br>
		<div class="informations">
			<p>
				<i class="material-icons">email</i><a href="mail">190103273@stu.sdu.edu.kz</a>
			</p>
			<p>
				<i class="material-icons">local_phone</i>
				<a>8 (775) XXX-XX-XX</a>
			</p>
			<p>
				<i class="material-icons">location_on</i>
				<a>{{__("Toraigyrova 51, Almaty, Kazakhstan")}}</a>
			</p>
		</div>
	</div>
</body>
</html>