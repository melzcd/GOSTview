<?php
require $_SERVER["DOCUMENT_ROOT"] . "/function/connect.php"; //Подключение к БД
require $_SERVER["DOCUMENT_ROOT"] . "/query_sql.php";

$Gost = isset($_REQUEST['id']) ? $_REQUEST['id'] : ''; // это упрощенный вариант "if" значение=(условие)?(если истина): (если ложь)
//$Gost = $_REQUEST['id'];  

$query_list_gost19 = ("
	SELECT
		`gost_id`,
		`gost_number`,
		`gost_name`,
		`content_name`,
		`gost_upload_name`,
		`gost_text`,
		`gost_comment`,
		`gost_favorites`

		FROM
		gost
		Left outer join catalog_content ON `content_id` = `gost_status`
		WHERE
		gost_type = 19"
		);
?>


<!DOCTYPE html>
<html lang="en">

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

<body onload="Show()">

<div class="container">

			<br>
			<table class="table-responsive">
				<thead>
				  <tr>
					<th>#</th>
					<th>ГОСТ</th>
					<th>Наименование</th>
					<th>Документ</th>
					<th>Статус</th>
					<th>Примичание</th>
					<th>Избранное</th>
					<th></th>
					<th></th>
				  </tr>
				</thead>		
<?php
error_reporting(E_ALL); 
$counter = 1;	
if ($result = $mysqli->query($query_list_gost19)) {
 

    /* извлечение ассоциативного массива */
while ($row = $result->fetch_assoc()) {
	printf ('<tr>
		<td>'.$counter++.'</td>
		<td>%s</td>
		<td>%s</td>
		<td><a href="gost/%s">Смотреть</a></td>
		<td >%s</td>
		<td>%s</td>
		<td>%s</td>
		<form action="function\func_add_fav.php">
			<td><input type="hidden"  name="gost_id" value=%s><button type="submit" class="btn btn-xs btn-info">В избранное</button></td>
		</form>
		<form action="view_html_new.php">
			<td><input type="hidden"  name="gost_id" value=%s><button type="submit" class="btn btn-xs btn-primary">Подробней</button></td>
		</form>
		</tr>', 
		htmlspecialchars($row['gost_number']),
		htmlspecialchars($row['gost_name']),
		htmlspecialchars($row['gost_upload_name']),
		htmlspecialchars($row['content_name']),
		htmlspecialchars($row['gost_comment']),
		htmlspecialchars($row['gost_favorites']),
		htmlspecialchars($row['gost_id']),
		htmlspecialchars($row['gost_id'])
		
		
	);
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
