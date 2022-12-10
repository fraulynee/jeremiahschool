      <?php

 include 'config.php';

if (isset($_POST['insert'])) {

  $complainant = $_POST['complainant'];
  $address = $_POST['address'];
  $grade_level = $_POST['grade_level'];
  $email = $_POST['email'];
  $contact_no = $_POST['contact_no'];
  $academic_attended = $_POST['academic_attended'];
  $shs_graduate = $_POST['shs_graduate'];
  // $form_137 = $_POST['form_137'];
  // $good_moral_certificate = $_POST['good_moral_certificate'];
  // $diploma = $_POST['diploma'];


  if (isset($_POST['form_137']) && isset($_POST['good_moral_certificate']) && isset($_POST['diploma'])) {
    $form_137 = 1;
    $good_moral_certificate = 1;
    $diploma = 1;

    $sql = "INSERT INTO tblrequest (complainant,address,grade_level,email,contact_no,academic_attended,shs_graduate,form_137,good_moral_certificate,diploma) VALUES ('".$complainant."','".$address."','".$grade_level."','".$email."','".$contact_no."','".$academic_attended."','".$shs_graduate."','".$form_137."','".$good_moral_certificate."','".$diploma."')";
     mysqli_query($conn, $sql);
  }else if (isset($_POST['form_137']) && isset($_POST['good_moral_certificate'])) {
    $form_137 = 1;
    $good_moral_certificate = 1;
    $diploma = 0;
    $sql = "INSERT INTO tblrequest (complainant,address,grade_level,email,contact_no,academic_attended,shs_graduate,form_137,good_moral_certificate) VALUES ('".$complainant."','".$address."','".$grade_level."','".$email."','".$contact_no."','".$academic_attended."','".$shs_graduate."','".$form_137."','".$good_moral_certificate."')";
     mysqli_query($conn, $sql);
  }else if (isset($_POST['form_137']) && isset($_POST['diploma'])) {
    $form_137 = 1;
    $good_moral_certificate = 0;
    $diploma = 1;
    $sql = "INSERT INTO tblrequest (complainant,address,grade_level,email,contact_no,academic_attended,shs_graduate,form_137,diploma) VALUES ('".$complainant."','".$address."','".$grade_level."','".$email."','".$contact_no."','".$academic_attended."','".$shs_graduate."','".$form_137."','".$diploma."')";
     mysqli_query($conn, $sql);
  }else if (isset($_POST['good_moral_certificate']) && isset($_POST['diploma'])) {
    $form_137 = 0;
    $good_moral_certificate = 1;
    $diploma = 1;
    $sql = "INSERT INTO tblrequest (complainant,address,grade_level,email,contact_no,academic_attended,shs_graduate,good_moral_certificate,diploma) VALUES ('".$complainant."','".$address."','".$grade_level."','".$email."','".$contact_no."','".$academic_attended."','".$shs_graduate."','".$good_moral_certificate."','".$diploma."')";
     mysqli_query($conn, $sql);
  }else if (isset($_POST['form_137'])) {
    $form_137 = 1;
    $good_moral_certificate = 0;
    $diploma = 0;
    $sql = "INSERT INTO tblrequest (complainant,address,grade_level,email,contact_no,academic_attended,shs_graduate,form_137) VALUES ('".$complainant."','".$address."','".$grade_level."','".$email."','".$contact_no."','".$academic_attended."','".$shs_graduate."','".$form_137."')";
     mysqli_query($conn, $sql);

  }else if (isset($_POST['good_moral_certificate'])) {
    $form_137 = 0;
    $good_moral_certificate = 1;
    $diploma = 0;
    $sql = "INSERT INTO tblrequest (complainant,address,grade_level,email,contact_no,academic_attended,shs_graduate,good_moral_certificate) VALUES ('".$complainant."','".$address."','".$grade_level."','".$email."','".$contact_no."','".$academic_attended."','".$shs_graduate."','".$good_moral_certificate."')";
     mysqli_query($conn, $sql);
  }else if (isset($_POST['diploma'])) {
    $form_137 = 0;
    $good_moral_certificate = 0;
    $diploma = 1;
    $sql = "INSERT INTO tblrequest (complainant,address,grade_level,email,contact_no,academic_attended,shs_graduate,diploma) VALUES ('".$complainant."','".$address."','".$grade_level."','".$email."','".$contact_no."','".$academic_attended."','".$shs_graduate."','".$diploma."')";
     mysqli_query($conn, $sql);
  }


  

}


mysqli_close($conn);
?>
 <div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <?php
           include 'config.php';
            $id = $_SESSION['IDNO'];
            $sql = "SELECT * FROM tblstudent WHERE IDNO = '$id' ";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
          ?>

          <input type="hidden" name="complainant" value="<?php echo $row['LNAME']." ".$row['FNAME']." ".$row['MNAME'] ?>" class="form-control">
          <input type="hidden" name="address" value="<?php echo $row['HOME_ADD'] ?>" class="form-control">
          <input type="hidden" name="grade_level" value="<?php echo $row['grade_level'] ?>" class="form-control">
          <input type="hidden" name="email" value="<?php echo $row['EMAIL'] ?>" class="form-control">
          <input type="hidden" name="contact_no" value="<?php echo $row['CONTACT_NO'] ?>" class="form-control">


        <div class="form-group">
          <label>Academic Attended*</label>
          <input type="text" name="academic_attended" class="form-control">
        </div>
        <div class="form-group">
          <label>Year Graduate*</label>
          <input type="text" name="shs_graduate" class="form-control">
        </div>

          
        <div class="form-group">
          <label>Record Requested*</label>
          <br>
          
          <input type="checkbox" name="form_137">
          <label>Form 137</label>
          &nbsp;&nbsp;
          <input type="checkbox" name="good_moral_certificate">
          <label>Good Moral Certificate</label>
          &nbsp;&nbsp;
          <input type="checkbox" name="diploma">
          <label>Diploma</label>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="insert" class="btn btn-primary" id="btn-career">SUBMIT</button>
      </div>
      </form>
    </div>

  </div>
</div>
