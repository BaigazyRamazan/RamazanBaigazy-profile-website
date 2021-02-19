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
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body style="background-color: black">
	<div class="header">
		<div>
			<a id="main" href="#">Home</a>
		</div>
		<div>
			<a id="about" href="#">About Me</a>
		</div>
		<div>
			<p id="active">Contact Me</p>
		</div>
	</div>
	<div class="footer">
		<h4>Get in touch</h4>
<!-- 		<br>
		<br>
		<br> -->
		<h1>Contact</h1>
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
				<a>Toraigyrova 51, Almaty, Kazakhstan</a>
			</p>
		</div>
	</div>
	<script type="text/javascript">
		var about = document.getElementById('about');
		about.addEventListener('click',function(){
			document.location.href = "/aboutMe";
		});

		var main = document.getElementById('main');
		main.addEventListener('click',function(){
			document.location.href = "/main";
		});
	</script>
</body>
</html>