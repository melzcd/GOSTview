<?php
session_start();
if (!isset($_SESSION['valid_user']) || !isset($_SESSION['valid_user_id']) || !isset($_SESSION['valid_user_r']) )
{
	echo header("Location:/login.php");
}
elseif ($_SESSION['valid_user_r'] !=1) {

	echo header("Location:/index.php");
}

error_reporting(E_ALL);
require $_SERVER["DOCUMENT_ROOT"] . "/function/connect.php";
require $_SERVER["DOCUMENT_ROOT"] . "/query_sql.php";
$user = $_SESSION['valid_user'];
$user_id = $_SESSION['valid_user_id'];
$user_r = $_SESSION['valid_user_r'];
//print_r($_SESSION);
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

<body>
<?php if ($user_r == 1) {include $_SERVER["DOCUMENT_ROOT"] . "/menu/menu-top-admin.php";} else {include $_SERVER["DOCUMENT_ROOT"] . "/menu/menu-top.php";} ?>
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
			<br>
			<table class="table table-hover">
			<form role="form" action=upload.php method=post enctype='multipart/form-data'>
			<div class="form-group">
			<label for="exampleInputEmail1">Номер ГОСТ:</label>
			<input type="text" name=gost_number class="form-control" id="exampleInputEmail1" placeholder="Номер ГОСТа">
			</div>
			<div class="form-group">
			<label for="namegost1">Наименование:</label>
			<input type="text" name=gost_name class="form-control" id="exampleInputPassword1" placeholder="Наименование ГОСТа">
			</div>
			<div class="form-group">
			<label for="namegost1">Категория ГОСТа:</label>
			<select name="gost_type" class="form-control">
				<option disabled>Выберите тип</option>
				<option value="19">19*</option>
				<option value="34">34*</option>
				<option value="2">2*</option>
				<option value="77">ГОСТ Р ИСО/МЭК</option>
				<option value="00">Инные*</option>
			</select>
			</div>
			<div class="form-group">
			<label for="namegost1">Статус:</label>
			<input type="text" name=gost_status class="form-control" id="exampleInputPassword1" placeholder="Статус ГОСТа">
			</div>
			<div class="form-group">
			<label for="exampleInputFile">Файл</label>
			<input type=file name=uploadfile id="exampleInputFile">
			<p class="help-block">Здесь можно вставить описание к примеру какие файлы можно грузить.</p>
			</div>
			<div class="form-group">
			<label for="exampleInputFile">Комментарий</label>
			​<textarea class="form-control" rows="10" cols="70" name=gost_comment ></textarea>
			<p class="help-block">Здесь можно вставить описание к примеру какие файлы можно грузить.</p>
			</div>
			<button type="submit" class="btn btn-default">Загрузить</button>
			</form>
			</table>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>