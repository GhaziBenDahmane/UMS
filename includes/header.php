<?php
//include config
require_once('config.php');
?>
<!-- Header -->
<header id="header">
	<h1><a href="index.php"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></h1>
	<nav class="links">
		<ul>
			<?php 
			if ($user->is_logged_in()) {

				echo '<li><a href="../logout.php"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i> Sign out</a></li>';
			} 
			else{
				
				echo '<li><a href="../login.php"><i class="fa fa-sign-in fa-2x" aria-hidden="true"></i> Sign in</a></li>';
			}
			?>
		</li>

	</ul>
</nav>
<nav class="main">
	<ul>
				<li class="search">
					<a class="fa-search" href="#search">Search</a>
					<form id="search" method="get" action="#">
						<input type="text" name="query" placeholder="Search in articles" />
					</form>
				</li>
			</ul>
		</nav>
	</header>
