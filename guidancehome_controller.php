<?php
session_start();
    include 'config.php'; 


    if (!isset($_POST['id']) OR empty($_POST['id'])) {
    	if (isset($_POST['save'])) {

			$description = $_POST['description'];
			$date = $_POST['date'];
            $student_id = $_POST['student_id'];

              $sql ="SELECT * FROM tblstudent WHERE S_ID = '".$student_id."' ";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);

              $fullname = $row['LNAME']." ".$row['FNAME'];
              $grade_level = $row['grade_level'];

            $sql ="INSERT INTO tblreport (fullname,grade,description,date) VALUES 
            ('".$fullname."','".$grade_level."','".$description."', '".$date."') ";

		    mysqli_query($conn, $sql);

		    echo "<script> alert('Report has been Added!'); </script>";
	    }
    }else{
    	if (isset($_POST['save'])) {
    		$id = $_POST['id'];
		$description = $_POST['description'];
		$date = $_POST['date'];

	    $sql ="UPDATE tblreport SET description = '".$description."', date = '".$date."' WHERE id = '".$id."' ";
	    mysqli_query($conn, $sql);

	    echo "<script> alert('Report has been Updated!'); </script>";
    }
    }
    

    if (isset($_POST['delete'])) {
		$id = $_POST['id'];

	    $sql ="DELETE FROM tblreport  WHERE id = '".$id."' ";
	    mysqli_query($conn, $sql);

	    echo "<script> alert('Data has been Deleted!'); </script>";
    }




    if (isset($_POST['delete_request'])) {
		$id = $_POST['id_request'];

	    $sql ="DELETE FROM tblrequest  WHERE id = '".$id."' ";
	    mysqli_query($conn, $sql);

	    echo "<script> alert('Data has been Deleted!'); </script>";
    }



    if (isset($_POST['approved_request'])) {
		$id = $_POST['id_request_approved'];

	    $sql ="SELECT * FROM  tblrequest WHERE id = '".$id."' ";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
 

    	$ch = curl_init();
        $parameters = array(
            'apikey' => '041c57539a2e2547dab9f7525216a353', //Your API KEY
            'number' => $row['contact_no'],
            'message' =>
              'Good day! Youre Request have been Approved',
            'sendername' => 'SEMAPHORE'
        );
        curl_setopt( $ch, CURLOPT_URL,'https://semaphore.co/api/v4/messages' );
        curl_setopt( $ch, CURLOPT_POST, 1 );

        //Send the parameters set above with the request
        curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );

        // Receive response from server
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        $output = curl_exec( $ch );
        curl_close ($ch);


	    echo "<script> alert('Data has been Approved!'); </script>";

		}

    
  

 //    $id = $_GET['id'];
 //    $sql = "DELETE FROM `tblconcern` WHERE `ConcernID` = '".$id."' ";
	// mysqli_query($conn, $sql);




	// $CID = $_GET['CID'];
	// $IDNO = $_GET['IDNO'];
 //    $sql = "UPDATE tblstudent SET COURSE_ID = '$CID', NewEnrollees = 1 WHERE IDNO = '$IDNO'";
 //    mysqli_query($conn, $sql);

?>

<script type="text/javascript">	
    window.location = "guidancehome.php";
</script>
