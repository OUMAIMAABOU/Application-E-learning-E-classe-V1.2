
<?php
include_once 'server.php';

$id= $_GET["id"] ;
 
$sql = "DELETE FROM courses WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
    header("Location:course.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
