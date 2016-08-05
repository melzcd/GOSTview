
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

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Отдел сопровождения функциональных задач</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="view_g2.php">ГОСТ 2* ЕСКД</a>
                    </li>
                    <li><a href="view_g19.php">ГОСТ 19* ЕСПД</a>
                    </li>
                    <li><a href="view_g34.php">ГОСТ 34*</a>
                    </li>
					<li><a href="view_gR.php">ГОСТ Р ИСО/МЭК</a>
                    </li>
					<li><a href="view_gFav.php">Избранные ГОСТы</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
			<br>
			<table class="table table-hover">
			<form role="form">
			<div class="form-group">
			<label for="exampleInputEmail1">Email</label>
			<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите адрес электронной почты">
			</div>
			<div class="form-group">
			<label for="exampleInputPassword1">Пароль</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
			</div>
			<div class="form-group">
			<label for="exampleInputFile">Файл</label>
			<input type="file" id="exampleInputFile">
			<p class="help-block">Здесь можно вставить описание к примеру какие файлы можно грузить.</p>
			</div>
			<div class="checkbox">
			<label>
			<input type="checkbox"> Проверка
			</label>
			</div>
			<button type="submit" class="btn btn-default">Принять</button>
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