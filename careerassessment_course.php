<?php
include 'config.php';
$CID = $_GET['CID'];
$IDNO = $_GET['IDNO'];
        $sql = "UPDATE tblstudent SET COURSE_ID = '$CID', NewEnrollees = 1 WHERE IDNO = '$IDNO'";
        mysqli_query($conn, $sql);
        header('location:careerassessment.php');
?>