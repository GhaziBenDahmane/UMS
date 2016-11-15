<!DOCTYPE html>
<html>
<head><title>File Upload To Database</title></head>
<body>
    <form enctype="multipart/form-data" action="upload.php" method="POST">
        <input type="file" name="image" >
        <input type="submit" name="submit" value="submit">
    </form>
  <?php 
  if(isset($_POST['submit']))
  {

   require('includes/config.php');
$imagename = addslashes($_FILES["image"]["name"]);
$imagedata =addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
$imagetype = addslashes($_FILES["image"]["type"]);
 if (substr($imagetype,0,5)=="image") {
 	$stmt = $db->query("INSERT INTO Uploadedimages VALUES ('','$imagename','$imagedata')");
 }
 else
 {
 	echo "not an image";
 }
}
   ?>
</body>
</html>