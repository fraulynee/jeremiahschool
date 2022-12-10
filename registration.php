<?php
include 'config.php';
if (isset($_POST['submit'])) {

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error === 0) {
        if ($img_size > 1250000) {
        }else{
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
                $allowed_exs = array("jpg", "jpeg", "png"); 

                if (in_array($img_ex_lc, $allowed_exs)) {
                  $STUDPHOTO = uniqid("IMG-", true).'.'.$img_ex_lc;
                  $img_upload_path = 'student/student_image/'.$STUDPHOTO;
                  move_uploaded_file($tmp_name, $img_upload_path);
                }
            }
      }
    
    $sql = "SELECT IDNO FROM tblstudent order by IDNO DESC ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $IDNO = $row["IDNO"] + 1;
    
    $FNAME = $_POST['FNAME'];
    $LNAME = $_POST['LNAME'];
    $MNAME = $_POST['MNAME'];

    
    $SEX = $_POST['SEX'];
    $BDAY = $_POST['BDAY'];
    $BPLACE = $_POST['BPLACE'];
    
    $NATIONALITY = $_POST['NATIONALITY'];
    $RELIGION = $_POST['RELIGION'];

    $EMAIL = $_POST['EMAIL'];
    $CONTACT_NO = $_POST['CONTACT_NO'];

    $HOME_ADD = $_POST['HOME_ADD'];

    $ALLERGY = $_POST['ALLERGY'];
    
    $FATHERLNAME = $_POST['FATHERLNAME'];
    $FATHERFNAME = $_POST['FATHERFNAME'];
    $FATHERINITIAL = $_POST['FATHERINITIAL'];
    $FATHEROCCUPATION = $_POST['FATHEROCCUPATION'];
    $FATHERAGE = $_POST['FATHERAGE'];
    $FATHERCONTACT = $_POST['FATHERCONTACT'];

    $MOTHERLNAME = $_POST['MOTHERLNAME'];
    $MOTHERFNAME = $_POST['MOTHERFNAME'];
    $MOTHERINITIAL = $_POST['MOTHERINITIAL'];
    $MOTHEROCCUPATION = $_POST['MOTHEROCCUPATION'];
    $MOTHERAGE = $_POST['MOTHERAGE'];
    $MOTHERCONTACT = $_POST['MOTHERCONTACT'];

    $GUARDIANLNAME = $_POST['GUARDIANLNAME'];
    $GUARDIANFNAME = $_POST['GUARDIANFNAME'];
    $GUARDIANMNAME = $_POST['GUARDIANMNAME'];
    $GUARDIANADDRESS = $_POST['GUARDIANADDRESS'];
    $GUARDIANCONTACT = $_POST['GUARDIANCONTACT'];
    $RELATIONSHIP = $_POST['RELATIONSHIP'];

    $ACC_USERNAME = $_POST['ACC_USERNAME'];
    $ACC_PASSWORD = $_POST['ACC_PASSWORD'];

    $FAMILYINCOME = $_POST['FAMILYINCOME'];
    $AFFIRMATION = $_POST['AFFIRMATION'];


    $student_status = $_POST['student_status'];
    $grade_level = explode(',', $_POST['grade_level']);

        $sql2 = "SELECT * FROM tblstudent WHERE FNAME = '".$FNAME."' AND LNAME = '".$LNAME."' OR EMAIL = '".$EMAIL."' OR ACC_USERNAME = '".$ACC_USERNAME."' OR ACC_PASSWORD = '".$ACC_PASSWORD."' ";
$result = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result) > 0) {
    header('location:registration.php?error=');
}else{


if ($img_size < 10 OR $img_size == 0 OR $img_size == "") {
      }else{


$sql = "INSERT INTO tblstudent (

IDNO
,FNAME
,LNAME
,MNAME
,SEX
,BDAY
,BPLACE
,NATIONALITY
,RELIGION
,EMAIL
,CONTACT_NO
,HOME_ADD
,ALLERGY
,FATHERLNAME
,FATHERFNAME
,FATHERINITIAL
,FATHEROCCUPATION
,FATHERAGE
,FATHERCONTACT
,MOTHERLNAME
,MOTHERFNAME
,MOTHERINITIAL
,MOTHEROCCUPATION
,MOTHERAGE
,MOTHERCONTACT
,GUARDIANLNAME
,GUARDIANFNAME
,GUARDIANMNAME
,GUARDIANADDRESS
,GUARDIANCONTACT
,RELATIONSHIP
,ACC_USERNAME
,ACC_PASSWORD
,FAMILYINCOME
,AFFIRMATION
,student_status
,YEARLEVEL
,grade_level
,COURSE_ID
,STUDPHOTO




) VALUES (


'$IDNO'
,'$FNAME'
,'$LNAME'
,'$MNAME'
,'$SEX'
,'$BDAY'
,'$BPLACE'
,'$NATIONALITY'
,'$RELIGION'
,'$EMAIL'
,'$CONTACT_NO'
,'$HOME_ADD'
,'$ALLERGY'
,'$FATHERLNAME'
,'$FATHERFNAME'
,'$FATHERINITIAL'
,'$FATHEROCCUPATION'
,'$FATHERAGE'
,'$FATHERCONTACT'
,'$MOTHERLNAME'
,'$MOTHERFNAME'
,'$MOTHERINITIAL'
,'$MOTHEROCCUPATION'
,'$MOTHERAGE'
,'$MOTHERCONTACT'
,'$GUARDIANLNAME'
,'$GUARDIANFNAME'
,'$GUARDIANMNAME'
,'$GUARDIANADDRESS'
,'$GUARDIANCONTACT'
,'$RELATIONSHIP'
,'$ACC_USERNAME'
,'$ACC_PASSWORD'
,'$FAMILYINCOME'
,'$AFFIRMATION'
,'$student_status'
,'".$grade_level[2]."'
,'".$grade_level[1]." ".$grade_level[2]."'
,'$grade_level[0]'
,'$STUDPHOTO'


) ";
     mysqli_query($conn, $sql);

}
header('location:registration.php');
}









    

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="registration.css" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Online Registration</title>
</head>

<body>
    <section id="header">
        <a href="./index.php" style="text-decoration: none">
            <img id="logo" src="./img/1.png" />
            <div id="name-withtagline">
                <h1 id="schhol-name">Jeremiah Montessori School</h1>
                <h3 id="tagline">Values and Excellence</h3>
        </a>
        <div class="social-media-icons">
            <a href="https://www.facebook.com/Holy Trinity University" target="_blank" class="fa fa-facebook fa-lg"></a>
            <a href="https://www.instagram.com/Holy Trinity University/ " target="_blank" class="fa fa-instagram fa-lg"></a>
            <a href="https://www.youtube.com/channel/Holy Trinity University" target="_blank" class="fa fa-youtube fa-lg"></a>
            <a href="# " target="_blank" class="fa fa-google fa-lg"></a>
        </div>
        </div>
    </section>

    <!-- 
    MAIN BODY -->
    <main>
        <!-- FIRST SECTIOn -->
        <form method="POST" enctype="multipart/form-data">
            <section id="first-section">


                <br>
                <br>
                <h1 id="online-registration"><em>Online Registration</em>
                </h1>


                <div id="image-container">

                    <p><img id="output" width="130" height="130" /></p>
                    <p><input type="file" accept="image/*" name="my_image" id="file" onchange="loadFile(event)" style="display: none;" required></p>
                    <p id="upload-button"><label for="file" style="cursor: pointer;">Upload Image <i class="fas fa-upload"></i></label></p>
                </div>
                <script>
                    var loadFile = function(event) {
                        var image = document.getElementById('output');
                        image.src = URL.createObjectURL(event.target.files[0]);
                    };
                </script>
                <div class="form-row">



                    <div class="checkboxes">
                        <input type="radio" id="box-new" name="student_status" value="New" required />
                        <label for="box-new" class="box"> New</label>

                        <input type="radio" id="box-transferee" name="student_status" value="Transferee" required />
                        <label for="box-transferee" class="box"> Transferee</label>

                        <input type="radio" id="box-old" name="student_status" value="Old Student" required  />
                        <label for="box-old" class="box"> Old Student</label> <br>
                    </div>
                    <div class="form-row">
                        <!-- <div class="col-7">
                            <label for="school-last-attended">School Last Attended*</label>
                            <input type="text" id="school-last-attended" class="form-control" placeholder="School Last Attended">
                        </div> -->
                        <div class="col">
                            <label for="grade">Grade Level*</label>
                            <select name="grade_level" class="form-control" required>
                                <option value=""> Select Grade Level</option>

                                <?php
                                  $sql ="SELECT * FROM course";
                                  $result = mysqli_query($conn, $sql);
                                  while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <option value="<?php echo $row['COURSE_ID'].",".$row['COURSE_NAME'].",".$row['COURSE_LEVEL'] ?>"><?php echo $row['COURSE_NAME']." ".$row['COURSE_LEVEL'] ?></option>

                                <?php } ?>
                              </select>
                        </div>
                        <div class="col-4">
                            <label for="school-year">School Year</label>
                            <input type="text" id="school-year" class="form-control" value="2021-2022" disabled>
                        </div>
                    </div>

            </section>

            <!-- STUDENT INFO -->

            <div id="divider">
                <h2 id="student-info">Student's Information</h2>
            </div>

            <div class="student-info-content">

                <div class="form-row">
                    <div class="form-group col-md-4.5">
                        <label for="FNAME">First Name*</label>
                        <input type="text" class="form-control" name="FNAME" placeholder="First Name" autocomplete="nope" required />
                    </div>
                    <div class="form-group col-md-4.5">
                        <label for="LNAME">Lastname*</label>
                        <input type="text" class="form-control" name="LNAME" placeholder="Last Name" autocomplete="off" required />
                    </div>
                    <div class="form-group col-md-4.5">
                        <label for="MNAME">Middle Name</label>
                        <input type="text" class="form-control" name="MNAME" placeholder=" Middle Name" autocomplete="nope" required />
                    </div> <br>
                    <div class="form-group col-md-4.5">
                        <label for="BDAY">Date of Birth*</label>
                        <input type="date" class="form-control " name="BDAY" required />
                    </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="form-group col-md-9">
                        <label for="BPLACE">Place of Birth*</label>
                        <input type="text" class="form-control" name="BPLACE" placeholder=" Birth Place" autocomplete="nope" required />
                    </div>
                    <br>
                    <div class="form-group col-md-4.5">
                        <label for="SEX">Gender*</label>
                        <select name="SEX" class="form-control" required>
                          <option selected>Choose...</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4.5">
                        <label for="NATIONALITY">Nationality*</label>
                        <input type="text" class="form-control" name="NATIONALITY" placeholder="Nationality" autocomplete="nope" required>
                    </div>
                    <div class="form-group col-md-4.5">
                        <label for="RELIGION">Religion*</label>
                        <input type="text" class="form-control" name="RELIGION" placeholder="Religion" autocomplete="nope" required>
                    </div>

                    
                    <br>
                    <div class="form-group col-md-4.5">
                        <label for="EMAIL">Email Address*</label>
                        <input type="email" class="form-control" name="EMAIL" placeholder="Email Address" autocomplete="nope" required>
                    </div>
                    <div class="form-group col-md-4.5">
                        <label for="CONTACT_NO">Telephone No.*</label>
                        <input type="tel" class="form-control" name="CONTACT_NO" placeholder="Telephone number" autocomplete="nope" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="HOME_ADD">Address*</label>
                        <input type="text" class="form-control" name="HOME_ADD" placeholder="Address" autocomplete="nope" required>
                    </div> 
                    <div class="form-group col-md-8.5">
                        <label for="ALLERGY">Medicine/s or Food allergic with (if any)</label>
                        <input type="text" class="form-control" name="ALLERGY" autocomplete="nope" required>
                    </div>
                </div>

            </div>

            <!-- FAMILY BACKGROOUND -->
            <div id="family-divider">
                <h2 id="family-info">Family Background</h2>
            </div>
            <section id="family-background-section" >


                <h1 class="parent">Father's Information</h1>
                <div class="family-background-content">
                    <div class="form-row">
                        <div class="form-group col-md-4.5">
                            <label for="FATHERLNAME">Lastname*</label>
                            <input type="text" class="form-control" name="FATHERLNAME" placeholder="Last Name" autocomplete="nope" required />
                        </div>
                        <div class="form-group col-md-4.5">
                            <label for="FATHERFNAME">First Name*</label>
                            <input type="text" class="form-control" name="FATHERFNAME" placeholder="First Name" autocomplete="nope" required />
                        </div>
                        <div class="form-group col-md-4.5">
                            <label for="FATHERINITIAL">Middle Initial</label>
                            <input type="text" class="form-control" name="FATHERINITIAL" placeholder="Middle Initial" autocomplete="nope" required />
                        </div>
                        <div class="form-group col-md-4.5">
                            <label for="FATHEROCCUPATION">Occupation</label>
                            <input type="text" class="form-control" name="FATHEROCCUPATION" placeholder="Occupation" autocomplete="nope" required />
                        </div>
                        <div class="form-group col-md-4.5">
                            <label for="FATHERAGE">Age</label>
                            <input type="number" class="form-control" name="FATHERAGE" placeholder="Age" autocomplete="nope" required />
                        </div>
                        <div class="form-group col-md-4.5">
                            <label for="FATHERCONTACT">Contact No.*</label>
                            <input type="tel" class="form-control" name="FATHERCONTACT" placeholder="Contact number" autocomplete="nope" required />
                        </div>
                    </div>

                </div>

                <h1 class="parent">Mother's Information</h1>
                <div class="family-background-content">
                    <div class="form-row">
                        <div class="form-group col-md-4.5">
                            <label for="MOTHERLNAME">Lastname*</label>
                            <input type="text" class="form-control" name="MOTHERLNAME" placeholder="Last Name" autocomplete="nope" required />
                        </div>
                        <div class="form-group col-md-4.5">
                            <label for="MOTHERFNAME">First Name*</label>
                            <input type="text" class="form-control" name="MOTHERFNAME" placeholder="First Name" autocomplete="nope" required />
                        </div>
                        <div class="form-group col-md-4.5">
                            <label for="MOTHERINITIAL">Middle Initial</label>
                            <input type="text" class="form-control" name="MOTHERINITIAL" placeholder="Middle Initial" autocomplete="nope" required />
                        </div>
                        <div class="form-group col-md-4.5">
                            <label for="MOTHEROCCUPATION">Occupation</label>
                            <input type="text" class="form-control" name="MOTHEROCCUPATION" placeholder="Occupation" autocomplete="nope" required />
                        </div>
                        <div class="form-group col-md-4.5">
                            <label for="MOTHERAGE">Age</label>
                            <input type="number" class="form-control" name="MOTHERAGE" placeholder="Age" autocomplete="nope" required />
                        </div>
                        <div class="form-group col-md-4.5">
                            <label for="MOTHERCONTACT">Contact No.*</label>
                            <input type="tel" class="form-control" name="MOTHERCONTACT" placeholder="Contact number" autocomplete="nope" required />
                        </div>
                    </div>
                </div>
                <h1 class="parent">Guardian's Information</h1>
                <div class="family-background-content">
                    <div class="form-row">
                        <div class="form-group col-md-4.5">
                            <label for="GUARDIANLNAME">Lastname*</label>
                            <input type="text" class="form-control" name="GUARDIANLNAME" placeholder="Last Name" autocomplete="nope" required />
                        </div>
                        <div class="form-group col-md-4.5">
                            <label for="GUARDIANFNAME">First Name*</label>
                            <input type="text" class="form-control" name="GUARDIANFNAME" placeholder="First Name" autocomplete="nope" required />
                        </div>
                        <div class="form-group col-md-4.5">
                            <label for="GUARDIANMNAME">Middle Name</label>
                            <input type="text" class="form-control" name="GUARDIANMNAME" placeholder="Middle Initial" autocomplete="nope" required />
                        </div>
                        <div class="form-group col-7">
                            <label for="GUARDIANADDRESS">Address*</label>
                            <input type="text" class="form-control" name="GUARDIANADDRESS" placeholder="Address" autocomplete="nope" required />
                        </div>
                        <div class="form-group col-md-4.5">
                            <label for="GUARDIANCONTACT">Contact No.*</label>
                            <input type="text" class="form-control" name="GUARDIANCONTACT" placeholder="Contact number" autocomplete="nope" required />
                        </div>
                        <div class="form-group col-md-10">
                            <label for="RELATIONSHIP">Relationship.*</label>
                            <input type="text" class="form-control" name="RELATIONSHIP" placeholder="Relationship" autocomplete="nope" required />
                        </div>
                        <div class="form-group col-md-12"></div>
                        <div class="form-group col-md-5">
                            <label for="ACC_USERNAME">Username*</label>
                            <input type="text" class="form-control" name="ACC_USERNAME" placeholder="Username" autocomplete="nope" required />
                        </div>
                        <div class="form-group col-md-5">
                            <label for="ACC_PASSWORD">Password.*</label>
                            <input type="password" class="form-control" name="ACC_PASSWORD" placeholder="Password" autocomplete="nope" required />
                        </div>
                    </div>
                    <h1 class="parent">Family Income per Annum</h1>
                    <div class="family-background-content">
                        <div class="family-checkboxes">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="FAMILYINCOME" id="inlineRadio1" value="below Php 50,000" required>
                                <label class="form-check-label" for="inlineRadio1"> below Php 50,000</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="FAMILYINCOME" id="inlineRadio2" value="Php 101,000 - 200,000" required>
                                <label class="form-check-label" for="inlineRadio2">Php 101,000 - 200,000</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="FAMILYINCOME" id="inlineRadio2" value="301,000 above" required>
                                <label class="form-check-label" for="inlineRadio2">Php 301,000 above</label>
                            </div> <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="FAMILYINCOME" id="inlineRadio2" value="Php 51,000 - 100,000" required>
                                <label class="form-check-label" for="inlineRadio2">Php 51,000 - 100,000</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="FAMILYINCOME" id="inlineRadio2" value="Php 201,000 - 300,000" required>
                                <label class="form-check-label" for="inlineRadio2">Php 201,000 - 300,000</label>
                            </div>
                            <br>
                            <br>
                            <br>


                            <div id="agreement">
                                <input type="checkbox" id="agree" name="AFFIRMATION" value="Yes" required> I have read and understood the rules and regulations Jeremiah Monstessori School and its applicable fees. I agree to abide by all the school's policies
                                and general directives now enforced or may be promulgated from time to time for the welfare and benefits of the students. I also agree to the dismissal of my son/daughter from this school should he/she be found out later,
                                after due process, that the school's academic and behavior standards have not met and/or enrolled under false pretense.
                            </div>
                            <button type="button" id="btn-submit" value="submit" data-toggle="modal" data-target="#registration_modal">Submit</button>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
                            <?php include 'registration_modal.php'; ?>


                        </div>
                    </div>
        </form>
    </main>
    <!-- 
    FOOTER -->

    <footer>
        <img id="logo-footer" src="./img/1.png" alt="">
        <div id="name-withtagline-footer">
            <h1 id="school-name-footer">Jeremiah Montessori School</h1>
            <h3 id="tagline-footer">Values and Excellence</h3>
        </div>
        <div class="address-contact">
            <p>CALAMBA LAGUNA<br>Phone:</p>


        </div>
        <div class="social-media-icons-footer">
            <a href="https://www.facebook.com/HOLY TRINITY UNIVERSITY" target="_blank" class="fa fa-facebook fa-lg"></a>
            <a href="https://www.instagram.com/HOLY TRINITY UNIVERSITY/ " target="_blank" class="fa fa-instagram fa-lg"></a>
            <a href="https://www.youtube.com/channel/HOLY TRINITY UNIVERSITY" target="_blank" class="fa fa-youtube fa-lg"></a>
            <a href="# " target="_blank" class="fa fa-google fa-lg"></a>
        </div>
    </footer>
    <div id="copyright">Copyright &copy; 2021 Jeremiah Montessori School. All Rights Reserved</div>
</body>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>



</html>



<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Registration already submitted</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">

    <?php if(isset($_GET['error'])): ?>
     $(window).load(function(){        
   $('#myModal').modal('show');
    }); 
 <?php endif; ?>
</script>>