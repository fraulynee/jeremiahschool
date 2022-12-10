<?php
include 'config.php';
$sql = "UPDATE tblstudent SET NewEnrollees = 1 WHERE IDNO= '".$_GET['IDNO']."'";
mysqli_query($conn, $sql);
header('location:studenthome.php');
?>