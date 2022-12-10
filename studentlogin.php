<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="studentlogin.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Student Log in</title>
</head>

<body>
    <div data-aos="fade-down" data-aos-duration="1500">
        <div class="form-container">
            <form action="" method="POST">
                <div class="imgcontainer">
                    <h1>Student Portal</h1>
                </div>

                <div class="container">
                    <label for="uname"><b>Student Number</b></label>
                    <input type="text" name="user_email" placeholder="Enter Student Number" required />

                    <label for="psw"><b>Access Code</b></label>
                    <input type="password"name="user_pass"  placeholder="Enter Access Code" required />

                    <a href=""> <button type="submit" name="btnLogin">Log in</button></a>
                </div>

                <div class="container">
                    <a href="./portal.php">
                        <button type="button" class="cancelbtn">Cancel</button></a>
                </div>
            </form>
        </div>
    </div>

    <script>
        AOS.init();
    </script>
</body>

</html>


 <?php 
 session_start();
include 'config.php';
if(isset($_POST['btnLogin'])){
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  


$sql = "SELECT * FROM tblstudent WHERE ACC_USERNAME = '$email' AND ACC_PASSWORD = '$upass' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if (mysqli_num_rows($result) > 0) {
  $_SESSION['IDNO'] = $row['IDNO'];
  header('location:studenthome.php');
} else {
    echo '<script type="text/javascript">alert("Invalid Username And Password")</script>';
}

 } 
 ?> 