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
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<div>
			<p id="active">Home</p>
		</div>
		<div>
			<a id="about" href="#">About Me</a>
		</div>
		<div>
			<a id="contact" href="#">Contact Me</a>
		</div>
	</div>
	<div class="main">
		<h1>My name is</h1>
		<h2>Ramazan Baigazy</h2>
		<h5>I'm student of SDU</h5>

		<img src="profile.jpeg" width="600" height="600">

		<p>I'm studying in Suleyman Demirel University's engineering faculty. I was born in Aktobe, but now I'm living in Almaty. I like Almaty.There are beautiful mountains and great sight-seeing. Studying and living in Almaty was my dream from child.And today I can say that I reached this dream. I am happy with this.</p>
	</div>
	<script type="text/javascript">
		var about = document.getElementById('about');
		about.addEventListener('click',function(){
			document.location.href = "/aboutMe";
		});

		var contact = document.getElementById('contact');
		contact.addEventListener('click',function(){
			document.location.href = "/contactMe";
		});
	</script>
</body>
</html>