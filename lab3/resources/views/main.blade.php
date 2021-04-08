<!DOCTYPE html>
<html>
<head>
	<title>My CV</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('style.css')}}">
</head>
<body>
	<div class="header">
		<div>
			<p id="active">{{ __("Home") }}</p>
		</div>
		<div>
			<a href="{{ route('aboutMe',app()->getLocale()) }}">{{__('About Me')}}</a>
		</div>
		<div>
			<a href="{{ route('contactMe',app()->getLocale()) }}">{{__('Contact Me')}}</a>
		</div>
		<div class="nav-item">
			<a href="{{route(Route::currentRouteName(),'en')}}" class="">EN</a>
			<a href="{{route(Route::currentRouteName(),'ru')}}" class="">RU</a>
			<a href="{{route(Route::currentRouteName(),'kz')}}" class="">KZ</a>
		</div>
	</div>
	<div class="main">
		<h1>{{__('My name is')}}</h1>
		<h2>{{__('Ramazan Baigazy')}}</h2>
		<h5>{{__("I'm student of SDU")}}</h5>

		<img src="{{asset('profile.jpeg')}}" width="600" height="600">

		<p>{{__("I'm studying in Suleyman Demirel University's engineering faculty. I was born in Aktobe, but now I'm living in Almaty. I like Almaty.There are beautiful mountains and great sight-seeing. Studying and living in Almaty was my dream from child.And today I can say that I reached this dream. I am happy with this.")}}</p>
	</div>
</body>
</html>