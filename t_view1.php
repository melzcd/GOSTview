<?php
session_start();
if (!isset($_SESSION['valid_user']) || !isset($_SESSION['valid_user_id']) || !isset($_SESSION['valid_user_r']) )
{
	echo header("Location:/login.php");
}
error_reporting(E_ALL);
require $_SERVER["DOCUMENT_ROOT"] . "/query_sql.php";
require $_SERVER["DOCUMENT_ROOT"] . "/function/connectPDO.php";
require $_SERVER["DOCUMENT_ROOT"] . "/function/func_all.php";
$user = $_SESSION['valid_user'];
$user_id = $_SESSION['valid_user_id'];
$user_r = $_SESSION['valid_user_r'];


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
	<? querySQLFav($host,$dbname,$userdb,$pass,$user_id, $query_list_gostFav); ?>
</table>
</div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>