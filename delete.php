<?php
include_once 'server.php';
 $_GET["id"] ;
$sql = "DELETE FROM students WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    header("Location:student.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
 
