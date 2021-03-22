<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Registrasi</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="style-form">
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <h2>Registrasi</h2>
        <p class="hint-text">Buat akun baru.</p>
        <div class="form-group">
            <input id="name" type="text" class="form-control" name="name" placeholder="Nama" required="required">       
        </div>
        <div class="form-group">
            <input id="email" type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" required="required">
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Registrasi</button>
        </div>
    </form>
    <div class="text-center">Sudah memiliki akun? <a href="{{ route ('login')}}">Masuk</a></div>
</div>
</body>
</html>