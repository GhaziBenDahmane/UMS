<?php
//include config
require_once('../../includes/config.php');


if(!$user->is_logged_in()){ 
	header('Location: ../../login.php'); 
}


if(isset($_GET['postID'])){ 
		$postID=$_GET['postID']) ;
		$stmt = $db->prepare('DELETE FROM blog_posts WHERE postID = :postID') ;
		$stmt->execute(array(':postID' => ^$postID));
		header("Location: " . $_SERVER["HTTP_REFERER"]);
		exit;
	}
} 
?>