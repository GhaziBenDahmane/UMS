<?php
require_once('../includes/config.php');
if(!$user->is_logged_in()){ 
	header('Location: ../login.php'); 
}
if(isset($_POST['submit'])){
	extract($_POST);

	if($matiereID ==''){
		$error[] = 'Please enter the matiereID.';
	}

	if($carteEtudiant ==''){
		$error[] = 'Please enter the carteEtudiant.';
	}

	if($nature ==''){
		$error[] = 'Please enter the nature.';
	}

	if($note ==''){
		$error[] = 'Please confirm the password.';
	}

	if(!isset($error)){
		try {
			$stmt = $db->prepare('INSERT INTO note (matiereID,carteEtudiant,valeur,nature) VALUES (:matiereID,:carteEtudiant,:note,:nature)') ;
			$stmt->execute(array(
				':matiereID' => $matiereID,
				':carteEtudiant' => $carteEtudiant,
				':note' => $note,
				':nature' => $nature
				));
			//redirect to index page
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
//check for any errors
if(isset($error)){
	foreach($error as $error){
		echo '<p class="error">'.$error.'</p>';
	}
}
?>