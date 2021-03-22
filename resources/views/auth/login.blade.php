<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="{{ asset('css/style.css') }}" rel="stylesheet">  
</head>
<body>
<div class="style-form">
    <form action="{{ route('login') }}" method="post">
        @csrf
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input id="email" type="email" name="email" class="form-control @error('email')is-invalid @enderror" placeholder="Email" required="required">
            @error('email') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
        </div>
        <div class="form-group">
            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required="required">
            @error('password') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror 
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Ingat saya?</label>
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="float-right">Lupa password?</a>
            @endif
        </div>        
    </form>
    <p class="text-center">Belum memiliki akun? <a href="{{ route('register')}}">Registrasi</a></p>
</div>
</body>
</html>
