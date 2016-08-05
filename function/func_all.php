<?php

function querySQL($host, $dbname, $userdb, $pass, $query) {
	$counter =1;
	try {
		$db = new PDO("mysql:host=$host;dbname=$dbname", $userdb, $pass);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->exec("set names utf8");
		$stmt = $db->query($query);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		while($row = $stmt->fetch()){
			echo 
			'<tr>
			<td>'.$counter++.'</td>
			<td>'. $row['gost_number'] .'</td>
			<td>'.$row['gost_name'].'</td>
			<td><a href="gost/'.$row['gost_upload_name'].'">Смотреть</a></td>
			<td>'.$row['gost_comment'].'</td>
			<form action="view_html_new.php">
				<td><input type="hidden"  name="gost_id" value='.$row['gost_id'].'><button type="submit" class="btn btn-xs btn-primary">Подробней</button></td>
			</form>
			<form action="function\func_del_fav.php">
				<td><input type="hidden"  name="gost_id" value='.$row['gost_id'].'><button type="submit" class="btn btn-xs btn-warning">Убрать</button></td>
			</form>
			</tr>';
			};
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
	$db = null;
}

//Выбор избранных
function querySQLFav($host, $dbname, $userdb, $pass, $user_id, $query) {
	$counter =1;
	try {
		$db = new PDO("mysql:host=$host;dbname=$dbname", $userdb, $pass);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->exec("set names utf8");
		$stmt = $db->prepare($query);
		$stmt->bindParam(':user_id', $user_id);
		$stmt->execute();
		while($row = $stmt->fetch()){
			echo 
			'<tr>
			<td>'.$counter++.'</td>
			<td>'. $row['gost_number'] .'</td>
			<td>'.$row['gost_name'].'</td>
			<td><a href="gost/'.$row['gost_upload_name'].'">Смотреть</a></td>
			<td>'.$row['gost_comment'].'</td>
			<form action="view_html_new.php">
				<td><input type="hidden"  name="gost_id" value='.$row['gost_id'].'><button type="submit" class="btn btn-xs btn-primary">Подробней</button></td>
			</form>
			<form action="function\func_del_fav.php">
				<td><input type="hidden"  name="gost_id" value='.$row['gost_id'].'><button type="submit" class="btn btn-xs btn-warning">Убрать</button></td>
			</form>
			</tr>';
			};
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
	$db = null;
}

//Генерация соли. Взять с кого-то сайта
function generateSalt($length){
  $chars = 'abcdef0123456789';
  $numChars = strlen($chars);
  $saltString = '';
  for ($i = 0; $i < $length; $i++) {
    $saltString .= substr($chars, rand(1, $numChars) - 1, 1);
  }
  return $saltString;
}


?>