<?php
 session_start();
 include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="index.css" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- <link href="//db.onlinewebfonts.com/c/f3258385782c4c96aa24fe8b5d5f9782?family=Old+English+Text+MT" rel="stylesheet" type="text/css" /> -->


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.0/css/boxicons.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">





    <title>Home Page</title>
</head>
<style type="text/css">
  .active, .dot:hover{
    background-color: unset;
    
  }

  .prev, .next{
    margin-top: -1.6px;
    position: unset;
    padding: 0px;
  }

</style>
<body>
    <section id="header">
        <a href="studenthome.php" style="text-decoration: none">
            <img id="logo" src="img/1.png" />
            <div id="name-withtagline">
                <h1 id="schhol-name">Jeremiah Montessori School</h1>
                <h3 id="tagline">Values and Excellence</h3>
        </a>
        <div class="social-media-icons">
            <a href="https://www.facebook.com/VoxDeiAcademy" target="_blank" class="fa fa-facebook fa-lg"></a>
            <a href="https://www.instagram.com/voxdeiacademy/ " target="_blank" class="fa fa-instagram fa-lg"></a>
            <a href="https://www.youtube.com/channel/UCWeRaQFuJ3zMR7ZTuz8NN8w" target="_blank" class="fa fa-youtube fa-lg"></a>
            <a href="mailto:voxdeiacademy@yahoo.com " target="_blank" class="fa fa-google fa-lg"></a>
            <a href="logout.php" class="text-white">Logout</a>
        </div>
        </div>
    </section>

    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-sm-3">
          <table class="table table-striped">
            <?php
            $sql ="SELECT * FROM  tblstudent INNER JOIN course ON tblstudent.COURSE_ID=course.COURSE_ID WHERE IDNO=" .$_SESSION['IDNO']." ";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>
            <thead>
              <tr> 
                <th>Real Name: </th>
                <th><?php echo $row['FNAME']." ".$row['LNAME'] ?></th> 
              </tr> 
              <tr> 
                <th>Course Name: </th>
                <th><?php echo $row['COURSE_NAME'] ?></th> 
              </tr> 
              <tr> 
                <th>Status: </th>
                <th><?php echo $row['student_status'] ?></th> 
              </tr>
              <tr> 
                <th>
                  <?php
                  if ($row['NewEnrollees'] == 0) { ?>
                    <a href="second_sen_enroll.php?IDNO=<?php echo $row['IDNO'] ?>" disabled>Click this For Second Semester Enrollees</a>
                  <?php }else{ ?> 
                    <a>Already Set For Second Semester Enrollees</a>
                  <?php } ?>
                </th>
                <th></th>
              </tr> 
            </thead>   
          </table>
          <button class="btn btn-success" data-toggle="modal" data-target="#studenthome_receipt_upload_modal">Receipt Upload</button>
          <?php if($row['grade_level'] == 'Grade 10'): ?>
          <button class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Career Assessment</button>
          <?php endif; ?>
          <button class="btn btn-primary" data-toggle="modal" data-target="#myModal3">Request</button>

        </div>
        <div class="col-sm-9">
          <div id="exTab1" class="container"> 
    <ul  class="nav nav-pills">
      <li class="active p-3">
        <a  href="#1a" data-toggle="tab" class="text-dark">Subject</a>
      </li>
      <li class="p-3"><a href="#2a" data-toggle="tab" class="text-dark">Update Account</a>
      </li>
     <!--  <li class="p-3"><a href="#3a" data-toggle="tab" class="text-dark">Receipt Upload</a>
      </li> -->
      <li class="p-3"><a href="#4a" data-toggle="tab" class="text-dark">Payment History</a>
      </li>
    </ul>

      <div class="tab-content clearfix">
        <div class="tab-pane active table-responsive" id="1a">
          <table id="example" class="table table-striped">
            <thead>
              <tr> 
              <th>Subject</th>
              <th>Description</th> 
              <th>Unit</th> 
              
              <th>First</th>
              <th>Second</th>
              <th>Third</th>
              <th>Fourth</th>
        
              <th>Semester</th> 
              </tr> 
            </thead>   
            <tbody>
              <?php
                  $sql = "SELECT * FROM `tblstudent` st, `grades` g,`subject` s ,studentsubjects ss WHERE st.`IDNO`=g.`IDNO` and g.`SUBJ_ID`=s.`SUBJ_ID`  and s.`SUBJ_ID`=ss.`SUBJ_ID` AND g.`IDNO`=ss.`IDNO`  AND g.`REMARKS` NOT IN ('Drop') and st.`IDNO`=".$_SESSION['IDNO'];

                      $result = mysqli_query($conn, $sql);
                      
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>'; 
     
              echo '<td>'. $row['SUBJ_CODE'].'</td>';
              echo '<td>'. $row['SUBJ_DESCRIPTION'].'</td>';
              echo '<td>' . $row['UNIT'].'</a></td>'; 
              
              echo '<td>'. $row['FIRST'].'</td>'; 
              echo '<td>'. $row['SECOND'].'</td>'; 
              echo '<td>'. $row['THIRD'].'</td>'; 
              echo '<td>'. $row['FOURTH'].'</td>'; 
  
              echo '<td>'. $row['SEMESTER'].'</td>';
                      
                        echo '</tr>';
                      }
                    ?> 
            </tbody>
          </table>
        </div>
        <div class="tab-pane" id="2a">
          <?php
            $sql ="SELECT * FROM  tblstudent WHERE IDNO=" .$_SESSION['IDNO']." ";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>
          <form action="studenthome_controller.php" class="form-horizontal " method="post" >
            <div class="table-responsive">
            <div class="col-md-8"><h2>Update Accounts</h2></div>
<!--             <div class="col-md-4"><label>Academic Year - <?php echo $_SESSION['SY'] ; ?></label></div> -->
            
              <table class="table">
                <tr>
                  <td><label>Id</label></td>
                  <td >
                    <input class="form-control input-md" readonly id="IDNO" name="IDNO" placeholder="Student Id" type="text" value="<?php echo isset($_SESSION['IDNO']) ? $_SESSION['IDNO'] : '' ?>">
                  </td>
                  <td colspan="4"></td>

                </tr>
                <tr>
                  <td><label>Firstname</label></td>
                  <td>
                    <input required="true"   class="form-control input-md" id="FNAME" name="FNAME" placeholder="First Name" type="text" value="<?php echo $row['FNAME']; ?>">
                  </td>
                  <td><label>Lastname</label></td>
                  <td colspan="2">
                    <input required="true"  class="form-control input-md" id="LNAME" name="LNAME" placeholder="Last Name" type="text" value="<?php echo $row['LNAME']; ?>">
                  </td> 
                  <td>
                    <input class="form-control input-md" id="MI" name="MNAME" placeholder="MI" type="text" value="<?php echo $row['MNAME']; ?>">
                  </td>
                </tr>
                <tr>
                  <td><label>Address</label></td>
                  <td colspan="5"  >
                  <input required="true"  class="form-control input-md" id="PADDRESS" name="HOME_ADD" placeholder="Permanent Address" type="text" value="<?php echo $row['HOME_ADD']; ?>">
                  </td> 
                </tr>
                <tr>
                  <td ><label>Sex </label></td> 
                  <td colspan="2">
                    <label>
                    <?php
                     if ($row['SEX']=='Female') {
                      # code...
                      echo '<input checked id="optionsRadios1" checked="true"  name="SEX" type="radio" value="Female">Female 
                       <input id="optionsRadios2"  name="SEX" type="radio" value="Male"> Male';
                     }else{
                        echo '<input checked id="optionsRadios1" name="SEX" type="radio" value="Female">Female 
                       <input id="optionsRadios2"  checked="true"  name="SEX" type="radio" value="Male"> Male';
                     }
                    ?>
                    </label>
                  </td>
                  <td    ><label>Date of birth</label></td>
                  <td colspan="2"> 
                  <div class="input-group" >
                            <div class="input-group-addon"> 
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input  required="true" name="BDAY"  id="BIRTHDATE"  type="text" class="form-control input-md"   
                            data-inputmask="'alias': 'mm/dd/yyyy'" data-mask value="<?php echo date_format(date_create($row['BDAY']),'m/d/Y'); ?>">
                     </div>             
                  </td>
                   
                </tr>
                <tr><td><label>Place of Birth</label></td>
                  <td colspan="5">
                  <input required="true"  class="form-control input-md" id="BIRTHPLACE" name="BPLACE" placeholder="Place of Birth" type="text" value="<?php echo $row['BPLACE']; ?>">
                   </td>
                </tr>
                <tr>
                  <td><label>Nationality</label></td>
                  <td colspan="2"><input required="true"  class="form-control input-md" id="NATIONALITY" name="NATIONALITY" placeholder="Nationality" type="text" value="<?php echo $row['NATIONALITY']; ?>">
                        </td>
                  <td><label>Religion</label></td>
                  <td colspan="2"><input  required="true" class="form-control input-md" id="RELIGION" name="RELIGION" placeholder="Religion" type="text" value="<?php echo $row['RELIGION']; ?>">
                  </td>
                  
                </tr>
                <tr>
                <td><label>Contact No.</label></td>
                  <td colspan="3">
                    <input required="true"  class="form-control input-md" id="CONTACT" name="CONTACT_NO" placeholder="Contact Number" type="text" value="<?php echo $row['CONTACT_NO']; ?>">
                </td>
                    
                  <td><label>Civil Status</label></td>
                  <td colspan="2"> 
                  <?php
                   if ($row['STATUS']=='Single') {
                    # code...
                    echo '<select class="form-control input-sm" name="STATUS"> 
                           <option selected="true" value="Single">Single</option>
                           <option value="Married">Married</option> 
                           <option value="Widow">Widow</option>
                        </select>';
                   }elseif ($row['STATUS']=='Married') {
                    # code...
                    echo '<select class="form-control input-sm" name="STATUS"> 
                           <option value="Single">Single</option>
                           <option selected="true" value="Married">Married</option> 
                           <option value="Widow">Widow</option>
                        </select> ';

                   }elseif ($row['STATUS']=='Widow') {
                    echo '<select class="form-control input-sm" name="STATUS"> 
                           <option  value="Single">Single</option>
                           <option value="Married">Married</option> 
                           <option selected="true" value="Widow">Widow</option>
                        </select> ';
                   }
                  ?> 
                  </td>
                </tr>
                <tr>
                  <td><label>Username</label></td>
                  <td colspan="6">
                    <input required="true"  class="form-control input-md" id="ACC_USERNAME" name="ACC_USERNAME" placeholder="Username" type="text"value="<?php echo $row['ACC_USERNAME']; ?>">
                  </td>
               
                </tr>
                <tr>
                  <td><label>Gaurdian</label></td>
                  <td colspan="2">
                    <input required="true"  class="form-control input-md" id="GUARDIANLNAME" name="GUARDIANLNAME" placeholder="Parents/Guardian Name" type="text"value="<?php echo $row['GUARDIANLNAME']; ?>">
                  </td>
                  <td><label>Contact No.</label></td>
                  <td colspan="2"><input  required="true" class="form-control input-md" id="GUARDIANCONTACT" name="GUARDIANCONTACT" placeholder="Contact Number" type="text"value="<?php echo $row['GUARDIANCONTACT']; ?>"></td>
                </tr>
                <tr>
                <td></td>
                  <td colspan="5">  
                    <button class="btn btn-success btn-lg" name="save" type="submit">Save</button>
                  </td>
                </tr>
              </table>
            </div>
          </form>
        </div>
        
          <div class="tab-pane" id="4a">
            <table id="table" class="table table-hover" style="font-size: 12px" >
            <thead>
              <tr style="font-size: 15px;"> 
                  <th>Date</th>
              <th>Amount Paid</th> 
              <th>Balance</th> 
              </tr> 
            </thead>
            <tbody>
              <?php 
              $total = 0; 
                  # code...
                  $IDNO = $_SESSION['IDNO'];
                  $sql ="SELECT * FROM  tbltransaction WHERE IDNO=" .$_SESSION['IDNO']." ";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {

                  echo '<tr>'; 
                  echo '<td style="font-size:15px;">'.$row['TransDate'].'</td>';
                  echo '<td style="font-size:15px;">&#8369; '.$row['AmountPaid'].'</td>';
                  echo '<td style="font-size:15px;">&#8369; '.$row['Balance'].'</td>'; 
                  echo '</tr>';

                  // $total += $result->SUBTOTAL; 

                 
                  }  
                
              ?> 
              <!-- <tr>
                <td colspan="4"></td>
              </tr> -->
            </tbody>
          </table>
        </div>
      </div>
  </div>
          
        </div>
      </div>
    </div>








<?php include 'studenthome_modal.php'; ?>
<?php include 'studenthome__request_modal.php'; ?>
<?php include 'studenthome_receipt_upload_modal.php'; ?>


<!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

            <script>
                AOS.init();
                $('#example').DataTable();
            </script>
</body>

</html>

























































    
   <link rel="stylesheet" type="text/css" href="bootstrap.min.css">


   

    <!-- 
    FOOTER -->

    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

         <?php
       include 'config.php';
        $sql = "SELECT * FROM course WHERE COURSE_NAME = 'STEM'";
        $result = mysqli_query($conn, $sql);
        $STEM2 = mysqli_fetch_assoc($result);

        $sql = "SELECT SUM(average) AS total_average FROM question WHERE courses = 'STEM'";
        $result = mysqli_query($conn, $sql);
        $STEM = mysqli_fetch_assoc($result);

        $sql = "SELECT * FROM course WHERE COURSE_NAME = 'ABM'";
        $result = mysqli_query($conn, $sql);
        $ABM22 = mysqli_fetch_assoc($result);

        $sql = "SELECT SUM(average) AS total_average FROM question WHERE courses = 'ABM'";
        $result = mysqli_query($conn, $sql);
        $ABM = mysqli_fetch_assoc($result);

        $sql = "SELECT * FROM course WHERE COURSE_NAME = 'HUMSS'";
        $result = mysqli_query($conn, $sql);
        $HUMSS222 = mysqli_fetch_assoc($result);

        $sql = "SELECT SUM(average) AS total_average FROM question WHERE courses = 'HUMSS'";
        $result = mysqli_query($conn, $sql);
        $HUMSS = mysqli_fetch_assoc($result);

        if ($STEM['total_average'] > $ABM['total_average'] OR $STEM['total_average'] > $HUMSS['total_average']) {

          echo "STEM ".$STEM['total_average']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='studenthome_controller.php?IDNO=".$_GET['IDNO']."&CID=".$STEM2['COURSE_ID']."&score="."STEM ".$STEM['total_average']. "'>Avail</a><br><br>";
        
        }else if ($ABM['total_average'] > $STEM['total_average'] OR $ABM['total_average'] > $HUMSS['total_average']) {

          echo "ABM ".$ABM['total_average']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='studenthome_controller.php?IDNO=".$_GET['IDNO']."&CID=".$ABM22['COURSE_ID']."&score="."ABM ".$ABM['total_average']. "'>Avail</a> <br><br>";

        }else if ($HUMSS['total_average'] > $ABM['total_average'] AND $HUMSS['total_average'] > $STEM['total_average']) {

          echo "HUMSS ".$HUMSS['total_average']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='studenthome_controller.php?IDNO=".$_GET['IDNO']."&CID=".$HUMSS222['COURSE_ID']."&score="."HUMSS ".$HUMSS['total_average']. "'>Avail</a> <br><br>";

        }
        
            
          
              ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>

  <?php if(isset($_GET['question'])): ?>
    $(window).load(function(){        
   $('#myModal').modal('show');
    }); 

  <?php endif; ?>
   
</script>
</html>