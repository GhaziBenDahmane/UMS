<?php
require_once('../includes/config.php');
if(!$user->is_logged_in()){ 
	header('Location: ../login.php'); 
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Articles Edit</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	<!--Icons-->
	<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
<?php 
	require_once('includes/common.php');
	?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">


				<div class="panel panel-default">
					<div class="panel-heading">Students List</div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
							<thead>
								<tr>
									<th data-sortable="true">ID</th>
									<th ddata-sortable="true">Title</th>
									<th ddata-sortable="true">Date</th>
									<th>edit</th>
									<th>remove</th>
								</tr>
							</thead>
							<tbody>
										<?php
											try {
												$stmt = $db->query('SELECT * FROM blog_posts ;');
												while($row = $stmt->fetch()){
													$postID=$row['postID'];
													echo "<tr><td>".$postID."</td><td>".$row['postTitle']."</td><td>".$row['postDate'].'</td><td><a href="'.$_SERVER['PHP_SELF'].'?edit='.strval($postID).'""><span class="glyphicon glyphicon-edit"></span></a></td><td><a href="actions/deletearticle.php?postID='.$postID.'""><span class="glyphicon glyphicon-remove" style="color:red"></span></a></td></tr>';
												}
											}catch(PDOException $e) {
												echo $e->getMessage();
											}
										?>
								
							</tbody>
						</table>
					</div>
				</div>

<?php if (isset($_GET['edit'])): 
$stmt = $db->prepare('SELECT * FROM blog_posts WHERE postID=:postID') ;
		$stmt->execute(array(
				':postID' => $_GET['edit']
				));
		$row = $stmt->fetch();
$_SESSION['edit'] = $_GET['edit'];

?>
				<div class="panel panel-default">
					<div class="panel-heading">edit an article</div>
					<div class="panel-body">
							<form role="form" action="actions/article.php" method="POST">
								<div class="form-group">
									<label>title</label>
									<input class="form-control" name="title" value= <?php echo '"'.$row['postTitle'].'"'; ?> >
								</div>
								<div class="form-group">
									<label>article description</label>
									<textarea class="form-control" rows="2" id="comment" name="desc"  >
										<?php echo $row['postDesc']; ?>
									</textarea>
								</div>
								<div class="form-group">
									<label>Article Content</label>
									<textarea class="form-control" rows="7" id="comment" name="cont" >
										<?php echo $row['postCont']; ?>
									</textarea>
								</div>
								<button type="submit" name="edit" class="btn btn-primary">Submit Button</button>
								<button type="reset" class="btn btn-default">Reset Button</button>
							</div>
						</form>
					</div>
				</div>
<?php else: 
?>
					<div class="panel panel-default">
					<div class="panel-heading">add an article</div>
					<div class="panel-body">
							<form role="form" action="actions/article.php" method="POST">
								<div class="form-group">
									<label>title</label>
									<input class="form-control" name="title" >
								</div>
								<div class="form-group">
									<label>article description</label>
									<textarea class="form-control" rows="2" id="comment" name="desc"  >
									</textarea>
								</div>
								<div class="form-group">
									<label>Article Content</label>
									<textarea class="form-control" rows="7" id="comment" name="cont" >
									</textarea>
								</div>
								<button type="submit" name="submit" class="btn btn-primary">Submit Button</button>
								<button type="reset" class="btn btn-default">Reset Button</button>
							</div>
						</form>
					</div>
				</div>
<?php endif ?>	




			</div>
		</div><!--/.row-->	
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
			if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
			if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
</script>	
</body>

</html>
