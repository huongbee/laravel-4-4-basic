<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login </title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action="{{route('login')}}">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		Username1: <input type="text" name="username[]" placeholder="Nhập username 1">
		<br><br>
		Username2: <input type="text" name="username[]" placeholder="Nhập username 2">
		<br><br>
		Password: <input type="password" name="password" placeholder="Nhập mật khẩu">
		<br><br>
		<button type="submit">Login</button>
	</form>
</body>
</html>