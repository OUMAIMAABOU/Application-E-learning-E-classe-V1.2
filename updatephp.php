<?php
    include_once 'server.php';

 $id=$_POST['id'];
 $img=$_POST['img'];
 $nom=$_POST['name'];
 $email=$_POST['email'];
 $phone= $_POST['phone'];
 $nbr= $_POST['Number'];
 $date=$_POST['date'];
$sql="UPDATE students 
SET img = '$img', nom = '$nom',email = '$email',phone1 = '$phone',phone2 = '$nbr',dt = '$date' WHERE id ='" .$id . "'";		

if (mysqli_query($conn, $sql)) {
header("location:student.php");
} else {
 echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);

?>