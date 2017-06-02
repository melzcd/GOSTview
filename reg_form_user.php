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

$user = $_SESSION['valid_user'];
$user_id = $_SESSION['valid_user_id'];
$user_r = $_SESSION['valid_user_r'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>title</title>

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
			<form class="form-reg" action="/function/func_reg_user.php" method="POST">
				<div class="form-group">
				<label for="exampleInputEmail1">Имя пользователя</label>
				<input type="text" name="user_name" class="form-control" id="exampleInputEmail1" placeholder="Имя пользователя">
				</div>
				<div class="form-group">
				<label for="namegost1">Пароль</label>
				<input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
				</div>
				<button type="submit" class="btn btn-default">Зарегистрировать пользователя</button>
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
	
