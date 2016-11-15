<?php 
	require_once('includes/config.php');
	if(isset($_POST['submit'])){
		extract($_POST);
		try {
			$stmt = $db->prepare('SELECT COUNT(*) FROM etudiant WHERE cin = :cin AND carteEtudiant = :carteEtudiant') ;
			$stmt->execute(array(
				':cin' => $cin,
				':carteEtudiant' => $studcard
			));
			$resp =  $stmt->fetch();
			if (intval($resp[0]) == 1) {
				$hashedpassword = $user->password_hash($passwd, PASSWORD_BCRYPT);
				echo $accname."<br />";
				echo $hashedpassword."<br />";
				echo $mail."<br />";
				echo $cin."<br />";
				$reqz = $db->prepare('INSERT INTO users (username,password,email,CIN,isadmin) VALUES (:username,:password,:email,:CIN,:isadmin)') 	 ;
				$reqz->execute(array(
					':username' => $accname,
					':password' => $hashedpassword,
					':email' => $mail, 
					':CIN' => $cin,
					':isadmin' => '0'
				));
				$user->login($accname,$passwd);
			}

			header('Location:index.php');
			exit;
		} catch(PDOException $e) {
		    echo $e->getMessage();
		}
	}
?>