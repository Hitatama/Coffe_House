<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><b>LOGIN</b><br>Aplikasi Copy Kita</h3>
            <hr>

			@if(session()->has('success'))
			<div class="alert alert-success alert-dismissible" role="alert">
			{{ session('success') }}
  			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			@endif

			@if(session()->has('loginError'))
			<div class="alert alert-danger alert-dismissible" role="alert">
			{{ session('loginError') }}
  			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			@endif

            <form action="/login" method="post">
            @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
					@error('email')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                <hr>
                <p class="text-center">Belum punya akun? <a href="/register">Register</a> sekarang!</p>
            </form>
        </div>
    </div>
</body>
</html>