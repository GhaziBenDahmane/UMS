<?php
require_once('../includes/config.php');
if(!$user->is_logged_in()){ 
	header('Location: ../login.php'); 
}
if(isset($_POST['submit'])){
	extract($_POST);
	if(!isset($error)){
		try {
			$stmt = $db->prepare('INSERT INTO etudiant (prenom,nom,filiereID,cin,carteEtudiant) VALUES (:prenom,:nom,:filliere,:cin,:carteEtudiant)') ;
			$stmt->execute(array(
				':prenom' => $prenom,
				':nom' => $nom,
				':filliere' => $filliere,
				':cin' => $cin,
				':carteEtudiant' => $carteEtudiant

			));
			header("Location: " . $_SERVER["HTTP_REFERER"]);
			exit;
		} catch(PDOException $e) {
		    echo $e->getMessage();
		}
	}
}
else{
	echo "string";
}
?>