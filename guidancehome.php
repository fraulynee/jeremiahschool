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
        <a href="guidancehome.php" style="text-decoration: none">
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
            <a href="logout.php">Logout</a>
        </div>
        </div>
    </section>
   

    <div class="container mt-5">
      <nav>
        <ul>
          <li style="list-style: none;display: inline-block;margin-left: 10px;"><a href="guidancehome.php" class="btn btn-warning">Guidance</a></li>
          <li style="list-style: none;display: inline-block;margin-left: 10px;"><a href="stats.php" class="btn btn-warning">Stats</a></li>
        </ul>
      </nav>
      <div class="row">
        <div class="col-sm-12">
          <div id="exTab1"> 
            <ul  class="nav nav-pills">
              <li class="active p-3">
                <a  href="#1a" data-toggle="tab" class="text-dark">Report</a>
              </li>
              <li class="p-3"><a href="#3a" data-toggle="tab" class="text-dark">Request</a>
        <!--       </li>
              <li class="p-3"><a href="#4a" data-toggle="tab" class="text-dark">Payment History</a>
              </li> -->
            </ul>

            <div class="tab-content clearfix">
              <div class="tab-pane active" id="1a">
                <div class="col-sm-12">
                  <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#reportmodal">Create Report</button>

                  <table id="example" class="table table-striped">
                    <thead>
                      <tr> 
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Grade Level</th>
                        <th>Description</th>  
                        <th>Date</th>
                        <th>Action</th>
                      </tr> 
                    </thead>   
                    <tbody>
                      <?php

                        function limit_text($text, $limit) {
                          if (str_word_count($text, 0) > $limit) {
                              $words = str_word_count($text, 2);
                              $pos   = array_keys($words);
                              $text  = substr($text, 0, $pos[$limit]) . '...';
                          }
                          return $text;
                        }

                        $sql ="SELECT * FROM tblreport";
                          $result = mysqli_query($conn, $sql);
                          while ($row = mysqli_fetch_assoc($result)) { ?>
                           <tr>
                           <td><?php echo $row['id'] ?></td>
                           <td><?php echo $row['fullname'] ?></td>
                           <td><?php echo $row['grade'] ?></td>
                           <td><?php echo limit_text($row['description'], 10); ?></td>
                           <td><?php echo $row['date'] ?></td>
                           <td>
                             <button class="btn btn-success" data-toggle="modal" data-target="#reportmodal"

                             data-id = "<?= $row['id'] ?>"
                             data-description = "<?= $row['description'] ?>"
                             data-date = "<?= $row['date'] ?>"
                             >Edit</button>
                             <button class="btn btn-danger" data-toggle="modal" data-target="#deletemodal" data-id = "<?= $row['id'] ?>">Delete</button>
                           </td>
                           </tr>
                      <?php } ?> 
                    </tbody>
                  </table>
                </div>
              </div>
              

              <div class="tab-pane" id="3a">
                <table id="example3" class="table table-striped">
                  <thead>
                    <tr> 
                      <th>Complainant</th>
                      <th>Address</th>
                      <th>Grade Level</th>
                      <th>Email</th>
                      <th>Contact No#</th>
                      <th>Academic Attended</th>
                      <th>SHS Graduate</th>
                      <th>Form 137</th>
                      <th>Good Moral Certificate</th>
                      <th>Diploma</th>
                      <th>Action</th>
                    </tr> 
                  </thead>   
                  <tbody>
                    <?php
                      $sql ="SELECT * FROM  tblrequest ";
                      $result = mysqli_query($conn, $sql);
                      while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                      <td><?php echo $row['complainant'] ?></td>
                      <td><?php echo $row['address'] ?></td>
                      <td><?php echo $row['grade_level'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td><?php echo $row['contact_no'] ?></td>
                      <td><?php echo $row['academic_attended'] ?></td>
                      <td><?php echo $row['shs_graduate'] ?></td>
                      <td><?php echo $row['form_137'] ?></td>
                      <td><?php echo $row['good_moral_certificate'] ?></td>
                      <td><?php echo $row['diploma'] ?></td>
                      <td style="display: flex;">
                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#approvedrequestmodal" data-id = "<?= $row['id'] ?>">Approved</button>
                        <button class="btn btn-sm btn-danger ml-2" data-toggle="modal" data-target="#deleterequestmodal" data-id = "<?= $row['id'] ?>">Delete</button>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>

     <!--          <div class="tab-pane" id="4a">
                asd4
              </div> -->
            </div>
        </div>
          
        </div>
      </div>
    </div>


    <?php include 'guidancehome_modal.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

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
        $('#example2').DataTable();
        $('#example3').DataTable();


      $('#reportmodal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget); /*Button that triggered the modal*/
          var id = button.data('id');
          var description = button.data('description');
          var date = button.data('date');

          var modal = $(this);
          modal.find('#id').val(id);
          modal.find('#description').val(description);
          modal.find('#date').val(date);

      });

      $('#deletemodal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget); /*Button that triggered the modal*/
          var id = button.data('id');

          var modal = $(this);
          modal.find('#id').val(id);

      });



      $('#deleterequestmodal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget); /*Button that triggered the modal*/
          var id = button.data('id');

          var modal = $(this);
          modal.find('#id_request').val(id);

      });


      $('#approvedrequestmodal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget); /*Button that triggered the modal*/
          var id = button.data('id');

          var modal = $(this);
          modal.find('#id_request_approved').val(id);

      });



    </script>

</body>

</html>