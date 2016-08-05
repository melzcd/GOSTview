<?php
session_start();
if (!isset($_SESSION['valid_user']) || !isset($_SESSION['valid_user_id']))
{
	echo header("Location:/login.php");
}
error_reporting(E_ALL);
require $_SERVER["DOCUMENT_ROOT"] . "/function/connect.php";
require $_SERVER["DOCUMENT_ROOT"] . "/query_sql.php";

//////////////////////////////////////////////////////////////
$user = $_SESSION['valid_user'];
$user_id = $_SESSION['valid_user_id'];
$gost_id = $_REQUEST['gost_id'];
error_reporting(E_ALL); 
//print_r($_REQUEST);
$mysqli->set_charset('utf8');
$stmt = $mysqli->prepare("INSERT INTO fav (user_id, gost_id) VALUES (?,?)");
$stmt->bind_param('ss',$user_id, $gost_id);
$stmt->execute();
$stmt->close();
mysqli_close($mysqli);
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
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <style>
    body {
        margin-top: 60px;
    }
    </style>

</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
			<div class="alert alert-success">
			Добавлено в избранное
			</div>
			<form action="/index.php">
				<td><input type="hidden"><button type="submit" class="btn btn-primary btn-sm">Вернуться обратно</button></td>
			</form>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
