<?php
session_start();
if (!isset($_SESSION['valid_user']) || !isset($_SESSION['valid_user_id']) || !isset($_SESSION['valid_user_r']) )
{
	echo header("Location:/login.php");
}
error_reporting(E_ALL);
require $_SERVER["DOCUMENT_ROOT"] . "/function/connect.php";
require $_SERVER["DOCUMENT_ROOT"] . "/query_sql.php";
$user = $_SESSION['valid_user'];
$user_id = $_SESSION['valid_user_id'];
$user_r = $_SESSION['valid_user_r'];

//print_r($_SESSION);
//$charset = $mysqli->character_set_name();
//printf ("Текущая кодировка: %s\n", $charset);
//$Gost = isset($_REQUEST['id']) ? $_REQUEST['id'] : ''; // это упрощенный вариант "if" значение=(условие)?(если истина): (если ложь)
//$Gost = $_REQUEST['id'];  


$gostQ = ("
		SELECT 	
			gost.gost_id,
			`gost_number`,
			`gost_name`,
			`content_name`,
			`gost_upload_name`,
			`gost_comment` 
		FROM gost 
			left outer join fav on fav.gost_id = gost.gost_id 
			Left outer join catalog_content ON `content_id` = `gost_status`
		WHERE 
			user_id = $user_id")
?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ФГБУ ИАЦ Судебного департамента</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <style>
    body {
        margin-top: 60px;
    }
</style>

</head>

<body>
<?php $user_r == 1 ? include $_SERVER["DOCUMENT_ROOT"] . "/menu/menu-top-admin.php" : include $_SERVER["DOCUMENT_ROOT"] . "/menu/menu-top.php"; ?>
<div class="container">
<br>
	<div class="row">
		<h2>Поиск, но не работает :)</h2>
        <div class="form-group">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="search" class="form-control" id="search" placeholder="Поиск">
            </div>
        </div>
    </div>
	<br>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>ГОСТ</th>
				<th>Наименование</th>
				<th>Документ</th>
				<th>Статус</th>
				<th>Примичание</th>
				<th></th>
				<th></th>
			</tr>
	</thead>		
<?php
error_reporting(E_ALL); 
$counter = 1;	
if ($result = $mysqli->query($gostQ)) {
    /* извлечение ассоциативного массива */
while ($row = $result->fetch_assoc()) {
	printf ('<tr>
		<td>'.$counter++.'</td>
		<td>%s</td>
		<td>%s</td>
		<td><a href="gost/%s">Смотреть</a></td>
		<td >%s</td>
		<td>%s</td>
		<form action="view_html_new.php">
			<td><input type="hidden"  name="gost_id" value=%s><button type="submit" class="btn btn-xs btn-primary">Подробней</button></td>
		</form>
		<form action="function\func_del_fav.php">
			<td><input type="hidden"  name="gost_id" value=%s><button type="submit" class="btn btn-xs btn-warning">Убрать</button></td>
		</form>
		</tr>',
		htmlspecialchars($row['gost_number']),
		htmlspecialchars($row['gost_name']),
		htmlspecialchars($row['gost_upload_name']),
		htmlspecialchars($row['content_name']),
		htmlspecialchars($row['gost_comment']),
		htmlspecialchars($row['gost_id']),
		htmlspecialchars($row['gost_id'])
	);
	
	//echo  json_encode($row, JSON_UNESCAPED_UNICODE);
}

    /* удаление выборки */
$result->free();
}
else 
echo "Запрос не выполнен";

/* закрытие соединения */
$mysqli->close();
?>
</table>
</div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
