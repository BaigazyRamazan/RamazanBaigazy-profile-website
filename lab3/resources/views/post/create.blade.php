<!DOCTYPE html>
<html>
<head>
	<title>Create new form</title>
</head>
<body>
	<form method="POST" action="{{ route('add-post') }}">
		@csrf
		<input type="text" name="title" placeholder="title">
		<input type="text" name="body" placeholder="body">
		<button type="submit">Create</button>
	</form>
</body>
</html>