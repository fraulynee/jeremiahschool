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
            <img id="logo" src="img/logo.png" />
            <div id="name-withtagline">
                <h1 id="schhol-name">Vox Dei Academy</h1>
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

    <div class="container mt-5">
      <nav>
        <ul>
          <li style="list-style: none;display: inline-block;margin-left: 10px;"><a href="guidancehome.php" class="btn btn-warning">Guidance</a></li>
          <li style="list-style: none;display: inline-block;margin-left: 10px;"><a href="stats.php" class="btn btn-warning">Stats</a></li>
        </ul>
      </nav>
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <div id="exTab1"> 
            <div class="tab-content clearfix">
              <div class="tab-pane active" id="1a">
                  <canvas id="oilChart" style="width: 100px;"></canvas>
              </div>
            </div>
          </div>
        </div>
         <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    



        var oilCanvas = document.getElementById("oilChart");

        <?php
        $id = $_GET['id'];
          $sql ="SELECT SUM(average) AS total_average FROM question WHERE courses = 'ABM' AND student_id = $id";
          $result = mysqli_query($conn, $sql);
          $ABM = mysqli_fetch_assoc($result); 

          $sql ="SELECT SUM(average) AS total_average FROM question WHERE courses = 'STEM' AND student_id = $id";
          $result = mysqli_query($conn, $sql);
          $STEM = mysqli_fetch_assoc($result);

          $sql ="SELECT SUM(average) AS total_average FROM question WHERE courses = 'HUMSS' AND student_id = $id";
          $result = mysqli_query($conn, $sql);
          $HUMMS = mysqli_fetch_assoc($result); 
        ?>

var oilData = {
    labels: [
        "STEM"+" "+<?php echo $STEM['total_average'] ?>,
        "ABM"+" "+<?php echo $ABM['total_average'] ?>,
        "HUMMS"+" "+<?php echo $HUMMS['total_average'] ?>,
    ],
    datasets: [
        {
          
            data: [<?php echo $STEM['total_average'] ?>,<?php echo $ABM['total_average'] ?>,<?php echo $HUMMS['total_average'] ?>],
            backgroundColor: [
                "#FF6384",
                "#007bff",
                "#84FF63"
            ]
        }]
};

var pieChart = new Chart(oilCanvas, {
  type: 'pie',
  data: oilData
});
    </script>

        <div class="col-sm-12">
          <div class="t">
                <table id="example2" class="table table-striped">
                  <thead>
                    <tr> 
                      <th>Full Name </th>
                      <th>Level </th>
                      <th>Status </th>
                      <th>Score </th>
                      <th>Action </th>
                    </tr> 
                  </thead>   
                  <tbody>
                    <?php
                      $sql ="SELECT * FROM  tblstudent WHERE grade_level = 'Grade 10' ";
                      $result = mysqli_query($conn, $sql);
                      while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                      <td><?php echo $row['LNAME']." ".$row['FNAME'] ?></td>
                      <td><?php echo $row['grade_level'] ?></td>
                      <td><?php echo $row['student_status'] ?></td>
                      <td><?php echo $row['score'] ?></td>
                      <td><a href="stats.php?id=<?php echo $row['IDNO'] ?>">Stats</a></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
        </div>
      </div>
    </div>


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


         
        $('#example2').DataTable();


    </script>

</body>

</html>