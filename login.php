<?php
session_start();
require $_SERVER["DOCUMENT_ROOT"] . "/function/connect.php";

echo "<br>";
if(empty($_REQUEST['user_name']) || !isset($_REQUEST['user_name'])){
		//echo "Заполните поле Логин";
	}
	else {
		/* @var $login type varchar */
		$login = $_REQUEST['user_name'];
		//echo "Данные присутствуют в поле Логин";
		//echo "<br>";
		if (empty($_REQUEST['pwd']) || !isset($_REQUEST['pwd'])){
			//echo "Заполните поле Пароль";
		}
		else {
			/* @var $pwd type INT */
			$pwd_hash = md5($_REQUEST['pwd']);
			//echo "Данные присутствуют в поле Пароль";
			$stmt = $mysqli->prepare("SELECT user_id, user_name, user_hash, user_role FROM users WHERE user_name=?");
			$stmt->bind_param('s',$login );
			$stmt->execute();
			$stmt->bind_result($user_id,$user_name,$user_hash, $user_role);
			$stmt->fetch();
			$user_hash = substr($user_hash, 0, -5);
			if ($pwd_hash === $user_hash ){
				//echo "<br>";
				//echo "Пароль найден";
				$stmt->close();
				$mysqli->close();
				$_SESSION['valid_user']= $user_name;
				$_SESSION['valid_user_id']= $user_id;
				$_SESSION['valid_user_r']= $user_role;
				//echo "<br>";
				//echo "<br>";
				//echo '<a href="/index.php">Перейти';
				//Временны метод
				echo 
				'<script type="text/javascript">
					window.location = "/index.php" 
				</script>';
			}
			else {
				echo "<br>";
				echo "Не корректно ввели данные";
				echo "<br>";
				echo '<a href="/login.php">Назад';
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Информационная система А-ГОСТ</title>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
</head>
<style>
body {
    background-color: #444;
    background: url(/img/pick8_1.jpg);
    }
</style>
<body>
<h1></h1>
</div>
</div>
<div class="container">
	<div class= "row">
		<div class="col-md-4 col-md-offset-4">
			<form class="form-signin" action="/login.php" method="POST">
			<h2 class="form-signin-heading">Вход</h2>
			<label for="inputEmail" class="sr-only">Логин</label>
			<input type="text" name="user_name" id="inputEmail" class="form-control" placeholder="Логин" required="" autofocus="">
			<br>
			<label for="inputPassword" class="sr-only">Пароль</label>
			<input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Пароль" required="">
			<br>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Войти в систему</button>
		 </form>
		</div>
	</div>
</div>	
<!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->
</body>
</html>