<?php require('../includes/config.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Institut national des sciences appliquées et de technologie</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

</head>
<body>

	<!-- Wrapper -->
	<div id="wrapper">
	<?php require('../includes/header.php'); ?>
		

		<!-- Main -->
		<div id="main">

			<!-- Post -->
			<?php
			try {

				$requested_page = isset($_GET['page']) ? intval($_GET['page']) : 1;

				$reqw = $db->query('SELECT COUNT(*) FROM blog_posts');
				$script_name = $_SERVER['PHP_SELF'];
				
				$resp =  $reqw->fetch();
				$article_count=$resp[0];
				$articles_per_page = 2;

				$page_count = ceil(intval($article_count) / $articles_per_page);


				if ( !is_int($requested_page) || $requested_page < 1 || $requested_page > $page_count ) {
					$requested_page=1;
				}
				$first_article_shown = ($requested_page - 1) * $articles_per_page;

				$stmt = $db->query("SELECT * FROM blog_posts ORDER BY postID DESC LIMIT $first_article_shown, $articles_per_page");
				while($row = $stmt->fetch()){
			?>
					<article class="post">
						<header>
							<div class="title">
								<h2><a href=<?php echo "viewpost.php?id=".$row['postID'] ?>> <?= $row['postTitle'] ?> </a></h2>
							</div>
							<div class="meta">
								<time class="published"><?php echo date('jS M Y H:i:s', strtotime($row['postDate'])) ?></time>
							</div>
						</header>
						<?php 
							if ($row['image'] != "") {
								echo '<img src="content/'.$row['image'].'" alt="" />';
							}
						 ?>
						<p><?php echo $row['postDesc'] ?></p>
						<footer>
							<ul class="actions">
								<li><a href=<?php echo "viewpost.php?id=".$row['postID'] ?> class="button big">Continue Reading</a></li>
							</ul>
							<ul class="stats">
								<li><a href="#">General</a></li>
								<li><a href="#" class="icon fa-heart">28</a></li>
								<li><a href="#" class="icon fa-comment">128</a></li>
							</ul>
						</footer>
					</article>
			<?php
				}

			} catch(PDOException $e) {
				echo $e->getMessage();
			}
			?>


			<!-- Pagination -->
			<ul class="actions pagination">
				<?php 
				if ($requested_page == 1) {
					echo '<li><a href="#" class="disabled button big previous">Previous Page</a></li>';
				}
				else{
					$new_page=$requested_page - 1;
					echo '<li><a href="'.$script_name.'?page='.$new_page.'" class=" button big previous">Previous Page</a></li>';
				
				}

				if ($requested_page == $page_count) {
					echo '<li><a href="#" class="disabled button big next">Next Page</a></li>';
				}
				else{
					$new_page=$requested_page + 1;
					echo '<li><a href="'.$script_name.'?page='.$new_page.'" class=" button big next">Next Page</a></li>';
				}
				
				?>
			</ul>

		</div>

		<!-- Sidebar -->
		<section id="sidebar">

			<!-- Intro -->
			<section id="intro">
				<!-- <a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a> -->
				<header>
					<h2>INSAT</h2>
					<p>institut national des sciences appliquées et de technologie</p>
				</header>
			</section>

			<!-- Mini Posts -->
			<section>
				<div class="mini-posts">
				<?php
					try {

					$stmt = $db->query('SELECT eventID, eventDateAndTime, eventPoster, eventTitle FROM Events ORDER BY eventDateAndTime DESC');
				while($row = $stmt->fetch()){
				?>

					<!-- Mini Post -->
					<article class="mini-post">
						<header>
							<h3><a href="#"><?= $row['eventTitle'] ?> </a></h3>
							<time class="published" datetime="2015-10-20"><?php echo date('jS M Y H:i:s', strtotime($row['eventDateAndTime'])) ?></time>
						</header>
						<a href="#" class="image"><?php 
							if ($row['eventPoster'] != "") {
								echo '<img src="content/Events/'.$row['eventPoster'].'" alt="Not Found" />';
							}
						 ?></a>
					</article>

				<?php
					}

				} catch(PDOException $e) {
						echo $e->getMessage();
					}
				?>
				</div>
			</section>

			<!-- About -->
			<section class="blurb">
				<h2>About</h2>
				<p>The National Institute of Applied Sciences and Technology (INSAT) is a Tunisian institute that is affiliated with the University of Carthage.Admission is very competitive and generally students must hold a good average on the national exam to be admitted. Training technicians and engineers, it provides a post-baccalaureate education over a period of three and five years.</p>
				<ul class="actions">
					<li><a href="https://en.wikipedia.org/wiki/National_Institute_of_Applied_Science_and_Technology" class="button">Learn More</a></li>
				</ul>
			</section>

			<!-- Footer -->
			<section id="footer">
				<ul class="icons">
					<li><a href="https://github.com/Khyol/project-WEB" class="fa-github"><span class="label">GITHUB</span></a></li>
					<li><a href="mailto:ghazi.ben.dahmen@outlook.com" class="fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<p class="copyright">&copy;Designed by: <a href="https://www.facebook.com/nadhem.fekihhassen">Nadhem Fekih Hassen</a> ,<a href="https://www.facebook.com/gbendahmen">Ghazi Ben Dahmen</a></p>
			</section>

		</section>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js"></script>
<!-- Javascript Libs -->
    <script type="text/javascript" src="../../lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../lib/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../lib/js/Chart.min.js"></script>
    <script type="text/javascript" src="../../lib/js/bootstrap-switch.min.js"></script>

    <script type="text/javascript" src="../../lib/js/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="../../lib/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../../lib/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="../../lib/js/select2.full.min.js"></script>
    <script type="text/javascript" src="../../lib/js/ace/ace.js"></script>
    <script type="text/javascript" src="../../lib/js/ace/mode-html.js"></script>
    <script type="text/javascript" src="../../lib/js/ace/theme-github.js"></script>
    <!-- Javascript -->
    <script type="text/javascript" src="../../js/app.js"></script>
</body>
</html>