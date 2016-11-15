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
	<title>Students Edit</title>

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
									<th data-sortable="true">CIN</th>
									<th ddata-sortable="true">Carte Etudiant</th>
									<th data-sortable="true">Prenom</th>
									<th data-sortable="true">Nom</th>
									<th data-sortable="true">Fillière</th>
								</tr>
							</thead>
							<tbody>
										<?php
											try {
												$stmt = $db->query('SELECT * FROM etudiant INNER JOIN filierefullinfo ON etudiant.filiereID = filierefullinfo.filiereID;');
												while($row = $stmt->fetch()){
													echo "<tr><td>".$row['cin']."</td><td>".$row['carteEtudiant']."</td><td>".$row['prenom']."</td><td>".$row['nom']."</td><td>".$row['full_name']."</td></tr>";
												}
											}catch(PDOException $e) {
												echo $e->getMessage();
											}
										?>
								
							</tbody>
						</table>
					</div>
				</div>
				

				<div class="panel panel-default">
					<div class="panel-heading">Add Student</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" action="useradd.php" method="POST">

								<div class="form-group">
									<label>Prenom</label>
									<input class="form-control" name="prenom">
								</div>
								<div class="form-group">
									<label>Nom</label>
									<input class="form-control" name="nom">
								</div>

								<div class="form-group">
									<label>Fillière</label>
									<select class="form-control" name="filliere">
										<option value="1">Génie Logiciel</option>
										<option value="2">Informatique Industrielle et Automatique</option>
										<option value="3">Réseaux Informatiques et Télécommunications</option>
										<option value="4">Instrumentation et Maintenance Industrielle</option>
										<option value="5">Chimie Industrielle</option>
										<option value="6">Biologie industrielle</option>
										<option value="7">Tronc Commun MPI</option>
										<option value="8">Tronc Commun CBA</option>

									</select>
								</div>
								
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-group">
										<label>Cin</label>
										<input class="form-control" name="cin" type="number">
									</div>
									<div class="form-group">
										<label>Numero carte etudiant</label>
										<input class="form-control" name="carteEtudiant" type="number">
									</div>
								</div>

								<button type="submit" name="submit" class="btn btn-primary">Submit Button</button>
								<button type="reset" class="btn btn-default">Reset Button</button>
							</div>
						</form>
					</div>
				</div>
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
