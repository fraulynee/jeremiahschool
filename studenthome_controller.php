<?php
session_start();
    include 'config.php'; 
    if (isset($_POST['save'])) {

		$FNAME = $_POST['FNAME'];
		$LNAME = $_POST['LNAME'];
		$MNAME = $_POST['MNAME'];
		$HOME_ADD = $_POST['HOME_ADD'];
		$SEX = $_POST['SEX'];
		$BDAY = $_POST['BDAY'];
		$BPLACE = $_POST['BPLACE'];
		$NATIONALITY = $_POST['NATIONALITY'];
		$RELIGION = $_POST['RELIGION'];
		$CONTACT_NO = $_POST['CONTACT_NO'];
		$STATUS = $_POST['STATUS'];
		$ACC_USERNAME = $_POST['ACC_USERNAME'];
		$GUARDIANLNAME = $_POST['GUARDIANLNAME'];
		$GUARDIANCONTACT = $_POST['GUARDIANCONTACT'];

	    $sql ="UPDATE  tblstudent SET FNAME = '$FNAME',LNAME = '$LNAME',MNAME = '$MNAME',HOME_ADD = '$HOME_ADD',SEX = '$SEX',BDAY = '$BDAY',BPLACE = '$BPLACE',NATIONALITY = '$NATIONALITY',RELIGION = '$RELIGION',CONTACT_NO = '$CONTACT_NO',STATUS = '$STATUS',ACC_USERNAME = '$ACC_USERNAME',GUARDIANLNAME = '$GUARDIANLNAME',GUARDIANCONTACT = '$GUARDIANCONTACT' WHERE IDNO=" .$_SESSION['IDNO']." ";
	    mysqli_query($conn, $sql);

	    echo "<script> alert('Accounts has been updated!'); </script>";
    }

    if (isset($_POST['savefiles'])) {

    	$filename = $_POST['filename'];
	    $file = rand(1000,100000)."-".$_FILES['my_image']['name'];
	    $file_loc = $_FILES['my_image']['tmp_name'];
		$folder="student/student_image/";
		$new_file_name = strtolower($file);	 
		$final_file=str_replace(' ','-',$new_file_name);

		$files = "student_image/".$final_file;
		 
		if(move_uploaded_file($file_loc,$folder.$final_file))
		{	
         	$sql = "INSERT INTO `tblconcern` (`IDNO`,`Concern`,`AttacmentFile`) VALUES ('".$_SESSION['IDNO']."','".$filename."','".$files."')";
	        mysqli_query($conn, $sql);
		}

	    echo "<script> alert('Accounts has been updated!'); </script>";

    }

    $id = $_GET['id'];
    $sql = "DELETE FROM `tblconcern` WHERE `ConcernID` = '".$id."' ";
	mysqli_query($conn, $sql);




	$CID = $_GET['CID'];
	$IDNO = $_GET['IDNO'];
	$SCORE = $_GET['score'];
    $sql = "UPDATE tblstudent SET COURSE_ID = '$CID', NewEnrollees = 1, score = '$SCORE' WHERE IDNO = '$IDNO'";
    mysqli_query($conn, $sql);

?>

<script type="text/javascript">	
    window.location = "studenthome.php";
</script>
