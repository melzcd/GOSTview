<?php
session_start();
require $_SERVER["DOCUMENT_ROOT"] . "/function/connect.php";

echo "<br>";
if(empty($_REQUEST['user_name']) || !isset($_REQUEST['user_name'])){
		echo "Заполните поле Логин";
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
			if ($pwd_hash === $user_hash){
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