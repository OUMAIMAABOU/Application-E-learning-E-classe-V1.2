<?php
    include_once 'server.php';

 $id=$_POST['id'];
 $title=$_POST['title'];
 $dur=$_POST['dur'];
 $prix= $_POST['prix'];

 
$sql="UPDATE courses 
SET title_course = '$title', duree_course = '$dur',prix_course = '$prix' WHERE id ='" .$id . "'";		

if (mysqli_query($conn, $sql)) {
header("location:course.php");
} else {
 echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);

?>