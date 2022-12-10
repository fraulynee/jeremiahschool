<?php
require_once("include/initialize.php");

 ?>
  <?php
 // if (isset($_SESSION['ACCOUNT_ID'])){
 //      redirect(web_root."admin/index.php");
 //     } 
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="adminlogin.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Admin Log in</title>
</head>

<body>
    <div data-aos="fade-down" data-aos-duration="1500">
        <div class="form-container">
            <form action="" method="POST">
                <div class="imgcontainer">
                    <h1>Administrator </h1>
                </div>

                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter username" name="user_email" required />

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="user_pass" required />

                    <a href="./index.php"> <button type="submit" name="btnLogin">Log in</button>
                </div>

                <div class="container">
                    <a href="./portal.php"><button type="button" class="cancelbtn">Cancel</button></a>
                    <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
                </div>
            </form>
        </div>
    </div>
    <script>
        AOS.init();
    </script>

    <script>
        function validation() {
            var id = document.f1.user.value;
            var ps = document.f1.pass.value;
            if (id.length == "" && ps.length == "") {
                alert("User Name and Password fields are empty");
                return false;
            } else {
                if (id.length == "") {
                    alert("User Name is empty");
                    return false;
                }
                if (ps.length == "") {
                    alert("Password field is empty");
                    return false;
                }


            }
        }
    </script>
</body>

</html>



 <?php 

if(isset($_POST['btnLogin'])){
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  $h_upass = sha1($upass);
  
   if ($email == '' OR $upass == '') {

      // message("Invalid Username and Password!", "error");
      // redirect("login.php");
    echo '<script type="text/javascript">alert("Invalid Username And Password")</script>';
         
    } else {  
  //it creates a new objects of member
    $user = new User();
    //make use of the static function, and we passed to parameters
    $res = $user::userAuthentication($email, $h_upass);
    if ($res==true) { 
       message("You logon as ".$_SESSION['ACCOUNT_TYPE'].".","success");
       
       $sql="INSERT INTO `tbllogs` (`USERID`, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) 
          VALUES (".$_SESSION['ACCOUNT_ID'].",'".date('Y-m-d H:i:s')."','".$_SESSION['ACCOUNT_TYPE']."','Logged in')";
          $mydb->setQuery($sql);
          $mydb->executeQuery();

      if ($_SESSION['ACCOUNT_TYPE']=='Administrator'){ 
         redirect(web_root."admin/enrollees/index.php");
      }elseif($_SESSION['ACCOUNT_TYPE']=='Registrar'){
          redirect(web_root."admin/enrollees/index.php");

      }elseif($_SESSION['ACCOUNT_TYPE']=='Guidance'){
          $_SESSION['ACCOUNT_ID'];
          redirect(web_root."guidancehome.php");

      }elseif($_SESSION['ACCOUNT_TYPE']=='Cashier'){
          $_SESSION['ACCOUNT_ID'];
          redirect(web_root."admin/payments/index.php");

      }else{
           // redirect(web_root."admin/login.php");
        echo '<script type="text/javascript">alert("Invalid Username And Password")</script>';
      }
    }else{
      // message("Account does not exist! Please contact Administrator.", "error");
      //  redirect(web_root."admin/login.php"); 
      echo '<script type="text/javascript">alert("Invalid Username And Password")</script>';
    }
 }
 } 
 ?>