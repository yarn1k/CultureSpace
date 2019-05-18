<!DOCTYPE HTML>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CultureSpace</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/bootstrap-social.css">
		<link rel="shortcut icon" href="" type="image/x-icon">
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/authorize.js"></script>
	</head>

	<body>
		<?php require "header.php"; ?>
		<div class="container-fluid">
			<div class="container">
				<form class="navbar-form navbar-left" role="search">
					<p style="font-size:20pt">Авторизация</p>
					<input id="username" type="text" class="form-control" placeholder="Имя пользователя" style="margin-bottom:12px"><br/>
					<input id="password" type="password" class="form-control" placeholder="Пароль" style="margin-bottom:12px" /><br/>
					<a href="forgot">Забыли пароль?</a><br/>
					<div class="form-check" style="margin-top:5px">
						<input class="form-check-input" type="checkbox" id="checkbox_remember">
						<label class="form-check-label" for="checkbox_remember">Оставаться в системе</label>
					</div>
					<br/>
					<input class="btn btn-primary" value="Вход" onclick="authorize()" type="button" style="margin-bottom:12px">
					<a class="btn btn-block btn-social btn-vk"><span class="fa fa-vk"></span>Войти через ВК</a>
					<a class="btn btn-block btn-social btn-odnoklassniki"><span class="fa fa-odnoklassniki"></span>Войти через Одноклассники</a>
					<button src="register" class="btn btn-default" style="margin-bottom:12px;margin-top:12px"><a href="register">Регистрация</a></button>
				</form>
			</div>
		</div>
		<?php include "footer.php"; ?>
	</body>
</html>