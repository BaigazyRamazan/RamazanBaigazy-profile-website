<!DOCTYPE html>
<html>
<head>
	<title>Create a from</title>
	<style type="text/css">
		/** {
			text-align: center;
		}*/
	</style>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<h2>Welcome!</h2>
	<div class="card-body">
		<form method="POST" class="user" action="{{URL::to('/lab8/store')}}" enctype="multipart/form-data">
	        @csrf

	        <div class="form-group row">
				<label for="name">Name:</label><br>

				<div class="col-md-6">
					<input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id = "name" name="name" placeholder="Enter your name">

					@error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
			</div>

			<div class="form-group row">
				<label for="surname">Surname:</label><br>

				<div class="col-md-6">
					<input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id = "surname" name="surname" placeholder="Enter your surname">
					@error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
			</div>

			<div class="form-group row">
				<label for="email">Email:</label><br>

				<div class="col-md-6">
					<input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
					@error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
			</div>

			<label for="photo">Upload a file</label>
			<input type="file" id="photo" name="photo"><br>


			<button type="submit" class="btn btn-primary btn-user btn-block" style="width: 10%;">
                {{ __('Login') }}
            </button>
            <!-- @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif -->
		</form>
	</div>
</body>
</html>