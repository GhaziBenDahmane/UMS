<?php
require_once('../../includes/config.php');
if(!$user->is_logged_in()){ 
	header('Location: ../../login.php'); 
}
$target_dir = "../../members/Documents/";
$filebasename = basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir .$filebasename;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		extract($_POST);
		$stmt = $db->prepare('SELECT * FROM niveau WHERE valeur=:valeur AND filiereID=:filiereID') ;
		$stmt->execute(array(
				':valeur' => $niveau,
				':filiereID' => $filliere
				));
		$resp =  $stmt->fetch();
		$val=$resp['lvlID'];
		echo "$val";
		$quer = $db->prepare('INSERT INTO documents(matiereID,lvlID,nom,author,type,nom_sur_disque,date) VALUES (:matiereID,:lvlID,:nom,:author,:type,:nom_sur_disque,:date)') ;
		$quer->execute(array(
				':matiereID' => $matiereID,
				':lvlID' => $val,
				':nom' => $title,
				':date' => date("Y-m-d"),
				':author' =>$author,
				':type' =>$type,
				':nom_sur_disque' => $filebasename
				));
		header("Location: " . $_SERVER["HTTP_REFERER"]);
		exit;
}
?>