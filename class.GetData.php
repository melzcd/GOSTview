<?php
require $_SERVER["DOCUMENT_ROOT"] . "/function/connect.php"; //Подключение к БД
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);



Class GetData
{


	public function getQuery () {
	
	$query1 = "
		SELECT
			`gost_id`,
			`gost_number`,
			`gost_name`,
			`content_name`,
			`gost_upload_name`,
			`gost_comment`

		FROM
			gost
			Left outer join catalog_content ON `content_id` = `gost_status`
		WHERE
			gost_favorites = 1";
	
	$result = $mysqli->query($query1);
	$row = $result->fetch_array(MYSQLI_NUM);
	return $row;
	
	
	}
}


$object = new GetData;
$object->getQuery()
?>


