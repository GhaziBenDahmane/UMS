<?php
require_once('../../includes/config.php');
if(!$user->is_logged_in()){ 
	header("Location: " . $_SERVER["HTTP_REFERER"]);
}
if(isset($_POST['submit'])){
	extract($_POST);
		try {
			$stmt = $db->prepare('INSERT INTO blog_posts (postTitle,postDesc,postCont) VALUES (:postTitle,:postDesc,:postCont)') ;
			$stmt->execute(array(
				':postTitle' => $title,
				':postDesc' => $desc,
				':postCont' => $cont
				));
			//redirect to index page
			header('Location: notes.php');
			exit;
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
}
if(isset($_POST['edit']) && isset($_SESSION['edit'])){
	extract($_POST);
		try {
			$stmt = $db->prepare('UPDATE  blog_posts SET  postTitle=:postTitle WHERE postID=:postID') ;
			$stmt->execute(array(
				':postTitle' => $title,
				':postID' => $_SESSION['edit']
				));
			$stmt = $db->prepare('UPDATE  blog_posts SET  postDesc=:postDesc WHERE postID=:postID') ;
			$stmt->execute(array(
				':postDesc' => $desc,
				':postID' => $_SESSION['edit']
				));
			$stmt = $db->prepare('UPDATE  blog_posts SET  postCont=:postCont WHERE postID=:postID') ;
			$stmt->execute(array(
				':postCont' => $cont,
				':postID' => $_SESSION['edit']
				));
			
			header("Location: " . $_SERVER["HTTP_REFERER"]);
			exit;
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
}
?>