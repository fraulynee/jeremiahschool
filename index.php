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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <title>Home Page</title>
</head>

<body>
    <section id="header">
        <a href="./index.php" style="text-decoration: none">
            <img id="logo" src="img/1.png" />
            <div id="name-withtagline">
                <h1 id="schhol-name">Jeremiah Monstessori School</h1>
                <h3 id="tagline">Values and Excellence</h3>
        </a>
        <div class="social-media-icons">
            <a href="#" target="_blank" class="fa fa-facebook fa-lg"></a>
            <a href="#" target="_blank" class="fa fa-instagram fa-lg"></a>
            <a href="#" target="_blank" class="fa fa-youtube fa-lg"></a>
            <a href="# " target="_blank" class="fa fa-google fa-lg"></a>
        </div>
        </div>
    </section>
<?php
// $servername = "localhost";
// $username = "root";
// $password = "123";
// $dbname = "dbgreenvalley";
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// $sql = "SELECT IDNO FROM tblstudent order by IDNO DESC ";
// $result = mysqli_query($conn, $sql);
//   $row = mysqli_fetch_assoc($result);
//     echo $row["IDNO"] + 1;
// mysqli_close($conn);
?>
    <!-- NAVBAR SECTION-->

    <div class="topnav" id="myTopnav">
        <a id="home" href="./index.php">Home</a>

        <div class="dropdown">
            <button class="dropbtn">
          About JMS
          <i class="fa fa-caret-down"></i>
        </button>
            <div class="dropdown-content">
                <a href="./philosophy.php">Educational Philosophy</a>
                <a href="./MissionVision.php">Vision and Mission</a>
                <a href="./seal.php">The School Seal</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">
          Online Application
          <i class="fa fa-caret-down"></i>
        </button>
            <div class="dropdown-content dropdown2-content">
          
                <a class="services" href="./enrollment.php">Admission/Enrollment  </a>
                <!-- <a class="services" href="./requestform.php">Request for Academic Documents</a
          >
          <a class="services" href="https://uquiz.com/quiz/Q933uz/which-shs-track-and-strand-fits-your-personality?fbclid=IwAR2xtX-9HEo_jGxQbh45MtjouRvWC2LDAABRQ1NW7a_-TEybEqZG71cAbc0"
            >Career Assessment</a
          > -->
            </div>
        </div>
        <a id="portal" href="./portal.php">JMS Portal</a>
        <!-- 
      <div class="dropdown">
        <button class="dropbtn">
          VDA Portal
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content dropdown2-content dropdown3-content">
          <a class="services" href="./studentlogin.php">Student</a>
                <a class="services" href="./teacherlogin.php">Teacher</a>
                <a class="services" href="./adminlogin.php">Admin</a>
            </div>
        </div> -->

        <a href="javascript:void(0);" style="font-size: 20px" class="icon" onclick="myFunction()">&#9776;</a
      >
    </div>
    <script src="./navbar.js"></script>

    <!-- MAIN BODY -->
    <div data-aos="zoom-in-up" data-aos-duration="1000">
      <div class="slideshow-container">
        <!--<div class="mySlides fade">-->
        <!--  <img class="banners" src="./img/slide8.jpg" />-->
        <!--</div>-->

        <div class="mySlides fade">
          <img class="banners" src="./img/2222.jpg" />
        </div>

        <div class="mySlides fade">
          <img class="banners" src="./img/jj.jpg" />
        </div>

        <div class="mySlides fade">
          <img class="banners" src="./img/jjj.jpg" />
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br />

    <div style="text-align: center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <div data-aos="fade-right" data-aos-duration="1000">
        <div class="button-container">
            <a href="./registration.php" target="_blank">
                <button id="apply-now">APPLY NOW</button></a>
        </div>
    </div>
    <script src="./banner.js"></script>
    </div>
    <!-- BLUE SECTION -->
    <div data-aos="fade-up" data-aos-offset="100" data-aos-duration="950" data-aos-anchor-placement="top-bottom">
        <section class="blue-section">
            <video id="welcome-video" autoplay loop="true" autoplay="autoplay" controls muted>
          <source src="# " />
        </video>
            <div class="blue-content">
                <h1 id="greetings">Welcome to Jeremiah Montessori School !</h1>
                <p class="welcome-content">
                Jeremiah Montessori School is non-secretarian educational institution located in Cabuyao, Laguna recognized by the Department of Education (DepEd). It provides Pre-school, Grade school, Junior High School and Senior High School. The school offers Academic track such as Accountancy, Business and Management (ABM) strand as well as Technical Vocational Livelihood (TVL) with the specialization in Home Economics (HE) strand for its senior high school program. 
                </p>
                <div data-aos="fade-left">
                    <a href="./philosophy.php">
                        <button class="learn-more">Learn More</button></a>
                </div>
            </div>
        </section>
    </div>

    <!-- RED SECTION -->

    <section class="red-section" data-aos="fade-up" data-aos-offset="100" data-aos-duration="950" data-aos-anchor-placement="top-bottom">
        <h1 id="news" data-aos="fade-down" data-aos-duration="900">
           JMS News and Events
        </h1>

        <div class="cards">
            <div class="card-container" data-aos="zoom-in-up" data-aos-duration="1000">
                <a href="https://www.facebook.com/jeremiah-montessori-school-122095397829175" target="_blank">
                    <img id="card1" src="./img/jj.JPG" alt="" /></a>
                <a id="date1" href="https://www.facebook.com/jeremiah-montessori-school-122095397829175" target="_blank">JMS</a
          >
        </div>
        <div
          class="card-container"
          data-aos="zoom-in-up"
          data-aos-duration="1000"
        >
          <a href="https://www.facebook.com/jeremiah-montessori-school-122095397829175" target="_blank">
            <img id="card1" src="./img/js.JPG" alt=""
          /></a>
                <a id="date1" href="https://www.facebook.com/jeremiah-montessori-school-122095397829175" target="_blank">
            JMS</a
          >
        </div>
        <div
          class="card-container"
          data-aos="zoom-in-up"
          data-aos-duration="1000"
        >
          <a href="https://www.facebook.com/jeremiah-montessori-school-122095397829175" target="_blank">
            <img id="card1" src="./img/jjs.JPG" alt=""
          /></a>
                <a id="date1" href="https://www.facebook.com/jeremiah-montessori-school-122095397829175" target="_blank">JMS</a
          >
        </div>
      </div>
    </section>

    <!-- 
    FOOTER -->

    <footer>
      <img id="logo-footer" src="img/1.png" alt="" />
      <div id="name-withtagline-footer">
        <h1 id="school-name-footer">Jeremiah Monstessori School</h1>
        <h3 id="tagline-footer">Values and Excellence</h3>
      </div>
      <div class="address-contact">
        <p>Cabuyao Laguna</p>
        <p>Phone: (046) -</p>
      </div>
      <div class="social-media-icons-footer">
        <a
          href="#"
          target="_blank"
          class="fa fa-facebook fa-lg"
        ></a>
                <a href="#" target="_blank" class="fa fa-instagram fa-lg"></a>
                <a href="#" target="_blank" class="fa fa-youtube fa-lg"></a>
                <a href="#" target="_blank" class="fa fa-google fa-lg"></a>
            </div>
            </footer>
            <div id="copyright">
                Copyright &copy; 2022 JEREMIAH MONTESSORI SCHOOL. All Rights Reserved
            </div>

            <script>
                AOS.init();
            </script>
</body>

</html>