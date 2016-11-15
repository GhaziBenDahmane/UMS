<?php require('../includes/config.php'); 

$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate, image FROM blog_posts WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
	header('Location: ./');
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js"></script>
</head>
<body>

	<div id="wrapper">
		<?php require('../includes/header.php'); ?>
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
						<p><?php echo $row['postCont'] ?></p>
						<footer>
							<ul class="stats">
								<li><a href="#">General</a></li>
								<li><a href="#" class="icon fa-heart">28</a></li>
								<li><a href="#" class="icon fa-comment">128</a></li>
							</ul>
						</footer>
					</article>

	</div>

</body>
</html>