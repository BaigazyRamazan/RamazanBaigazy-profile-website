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
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<div>
			<a id="main" href="#">Home</a>
		</div>
		<div>
			<p id="active">About Me</p>
		</div>
		<div>
			<a id="contact" href="#">Contact Me</a>
		</div>
	</div>
	<div class="body">
		<div class="personal">
			<h1>Personal Information</h1>
			<br>
			<dl>
				<dt>Name:</dt>
					<dd>Ramazan</dd>
				<dt>Surname:</dt>
					<dd>Baigazy</dd>
				<dt>Citizenship:</dt>
					<dd>Kazakhstan</dd>
				<dt>Place of Birth:</dt>
					<dd>Aktobe:</dd>
				<dt>Date of Birth:</dt>
					<dd>04.12.01</dd>
				<dt>Hobbies:</dt>
					<dd>Playing computer games,reading,watching animes</dd>
			</dl>
		</div>
		<div class="skill">
			<h1>Skills</h1>
			<br>
			<p>I have no bad habits and I'm good at team working.</p>

			<h2>Languages that I learned</h2>
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
	<script type="text/javascript">
		var main = document.getElementById('main');
		main.addEventListener('click',function(){
			document.location.href = "/main";
		});

		var contact = document.getElementById('contact');
		contact.addEventListener('click',function(){
			document.location.href = "/contactMe";
		});
	</script>
</body>
</html>