	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><span>INSAT</span>Administration</a>
			<ul class="user-menu">
				<li class="dropdown pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $_SESSION['username'] ?> <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<ul class="nav menu">
		<li <?php if ($_SERVER['PHP_SELF']=="/blog/admin/index.php") {echo 'class="active"';} ?> ><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Welcome Page</a></li>
		<li role="presentation" class="divider"></li>
		<li <?php if ($_SERVER['PHP_SELF']=="/blog/admin/articles.php") {echo 'class="active"';} ?> ><a href="articles.php"> Main Page news</a></li>
		<li <?php if ($_SERVER['PHP_SELF']=="/blog/admin/students.php") {echo 'class="active"';} ?> ><a href="students.php">Student's list</a></li>
		<li <?php if ($_SERVER['PHP_SELF']=="/blog/admin/marks.php") {echo 'class="active"';} ?> ><a href="marks.php"> Student's marks</a></li>
		<li <?php if ($_SERVER['PHP_SELF']=="/blog/admin/documents.php") {echo 'class="active"';} ?>><a href="documents.php"> Documents management</a></li>
	</ul>
</div>