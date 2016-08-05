<?php
require $_SERVER["DOCUMENT_ROOT"] . "/function/connect.php";
  // print_r($_REQUEST);
//printf ("Текущая кодировка: %s\n", $charset);
//echo $mysqli->host_info . "\n";
echo'<br>';
if (empty($_REQUEST['user_name']) || !isset($_REQUEST['user_name'])){echo "Заполните поле логин";}
else {$user_name = htmlspecialchars($_REQUEST['user_name']);}
echo'<br>';
if (empty($_REQUEST['pwd']) || !isset($_REQUEST['pwd'])){echo "Заполните поле пароль";}
else {$pwd =htmlspecialchars ($_REQUEST['pwd']);}

echo'<br>';

	$stmt = $mysqli->prepare("SELECT user_name FROM users WHERE user_name = ?");
	$stmt->bind_param('s',$user_name);
	$stmt->execute();
	$stmt->store_result();
	$result = $stmt->num_rows;
	$stmt->close();
	if ($result > 0) {
		echo "УВЫ!!!! Такой логин существует";
		echo "<br>";
		echo '<p><a href="/form/reg_form.php">OK</a></p>';
}
else {
	//$pwd = $user_hash;
	$user_hash = md5($_REQUEST['pwd']);
	$stmt = $mysqli->prepare("INSERT INTO users(user_name, user_hash) VALUES(?,?)");
	$stmt->bind_param('ss',$user_name,$user_hash);
	$stmt->execute();
	
	$stmt = $mysqli->prepare("SELECT user_id FROM users WHERE user_name = ?");
	$stmt->bind_param('s',$user_name);
	$stmt->execute();
	$stmt->bind_result($user_id);
	$stmt->fetch();
	//printf("Ошибка: %s.\n", mysqli_stmt_error($stmt));
	$stmt->close();
	mysqli_close($mysqli);
	echo '<p><a href="/index_control.php">OK</a></p>';
	
/* 	$stmt = $mysqli->prepare("INSERT INTO balance(balance_user_id) VALUES(?)");
	$stmt->bind_param('s',$user_id);
	$stmt->execute();
	$mysqli->close();
	//printf("Ошибка: %s.\n", mysqli_stmt_error($stmt));
	echo '<p><a href="/index_control.php">OK</a></p>'; */
}
?>