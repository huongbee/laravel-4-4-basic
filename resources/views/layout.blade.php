<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="">
</head>
<body>

	@include('header')

	<?php include('../resources/views/header.blade.php');?>

	<div class="container">
		@yield('content')


		@yield('content2')
	</div>
	<div class="footer">
		<h2>Đây là footer</h2>
	</div>
</body>
</html>