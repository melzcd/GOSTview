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
//print_r($_REQUEST);
$mysqli->set_charset('utf8');
$stmt = $mysqli->prepare("$query_view_gost");		
$stmt->bind_param('s',$gost_id);
$stmt->execute();
$stmt->bind_result($gost_id,$gost_number,$gost_name,$content_name, $gost_upload_name, $gost_text, $gost_comment);

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
<?php include $_SERVER["DOCUMENT_ROOT"] . "/menu/menu-top.php"; ?>

<?php			
while ($stmt->fetch())
{
echo '
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
			<br>
			<table class="table table-hover">
			<div class="form-group">
			<label for="exampleInputEmail1">Номер ГОСТ:</label>
			<input type="text" name=gost_number class="form-control" id="exampleInputEmail1" value="'.$gost_number.'"></div>
			<div class="form-group">
			<label for="namegost1">Наименование:</label>
			<input type="text" name=gost_name class="form-control" value="'.$gost_name.'" placeholder="Наименование ГОСТа">
			</div>
			<div class="form-group">
			<label for="namegost1">Тип:</label>
			<input type="text" name=gost_name class="form-control" value="'.$gost_upload_name.'" placeholder="Наименование ГОСТа">
			</div>
			<div class="form-group">
			<label for="namegost1">Статус:</label>
			<input type="text" name=gost_status class="form-control" value="'.$content_name.'" placeholder="Статус ГОСТа">
			</div>
			<div class="form-group">
			<label for="exampleInputFile">Текст ГОСТа</label>
			<pre>​'.$gost_text.'</pre>
			</div>
			</table>
            </div>
        </div>
    </div>';}
	?>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>