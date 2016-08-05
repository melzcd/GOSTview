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
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ГОСТы<span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="gost.php?id=1">ГОСТ 2* ЕСКД</a></li>
						<li><a href="gost.php?id=2">ГОСТ 19* ЕСПД</a></li>
						<li><a href="gost.php?id=3">ГОСТ 34*</a></li>
						<li><a href="gost.php?id=4">ГОСТ Р ИСО/МЭК</a></li>
					  </ul>
					</li>
				
                </ul>
				<ul class="nav navbar-nav">
					<li><a href="/index.php">Избранные ГОСТы</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/function/func_logout.php">Выход</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a><span class="glyphicon glyphicon-user" aria-hidden="true"> <?php echo $user; ?></a></span></li>
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>