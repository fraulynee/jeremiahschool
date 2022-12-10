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
        </div>
        </div>
    </section>

    <!-- NAVBAR SECTION-->

    <div class="topnav" id="myTopnav">
        <a id="home" href="./index.php">Home</a>

        <div class="dropdown">
            <button class="dropbtn">
          About VDA
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
                <a class="services" href="./admissions.php">Admissions </a>
                <a class="services" href="./enrollment.php">Enrollment  </a>
                <!-- <a class="services" href="./requestform.php">Request for Academic Documents</a
          >
          <a class="services" href="https://uquiz.com/quiz/Q933uz/which-shs-track-and-strand-fits-your-personality?fbclid=IwAR2xtX-9HEo_jGxQbh45MtjouRvWC2LDAABRQ1NW7a_-TEybEqZG71cAbc0"
            >Career Assessment</a
          > -->
            </div>
        </div>
        <a id="portal" href="./portal.php">VDA Portal</a>
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
        <div class="mySlides fade">
          <img class="banners" src="./img/slideshow2.png" />
        </div>

        <div class="mySlides fade">
          <img class="banners" src="./img/slideshow1.png" />
        </div>

        <div class="mySlides fade">
          <img class="banners" src="./img/slideshow3 .png" />
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
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
          <source src="./video/video.mp4 " />
        </video>
            <div class="blue-content">
                <h1 id="greetings">Welcome to Vox Dei Academy !</h1>
                <p class="welcome-content">
                    Vox Dei Academy (VDA) is a member of Asia Lutheran Education Association. It is an organization of Lutheran schools and educators around Asia.<br /><br /> Through this organization, VDA was able to introduce Service Learning to its
                    students, where they are engaged to meaningful activities and understand the value of serving others, especially the needy.<br /><br /> Locally, VDA is also a member of Philippine Lutheran Education Association. Members of this organization
                    meet annually for activities such workshops, sports events, curriculum development, among others.
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
            VDA News and Events
        </h1>

        <div class="cards">
            <div class="card-container" data-aos="zoom-in-up" data-aos-duration="1000">
                <a href="https://www.youtube.com/watch?v=WRgsKQz7V3k" target="_blank">
                    <img id="card1" src="./img/recog.png" alt="" /></a>
                <a id="date1" href="https://www.youtube.com/watch?v=WRgsKQz7V3k" target="_blank">Virtual Recognition 2021</a
          >
        </div>
        <div
          class="card-container"
          data-aos="zoom-in-up"
          data-aos-duration="1000"
        >
          <a href="https://www.youtube.com/watch?v=-oCA8idGtF8" target="_blank">
            <img id="card1" src="./img/news1.png" alt=""
          /></a>
                <a id="date1" href="https://www.youtube.com/watch?v=-oCA8idGtF8" target="_blank">
            News Update</a
          >
        </div>
        <div
          class="card-container"
          data-aos="zoom-in-up"
          data-aos-duration="1000"
        >
          <a href="https://www.youtube.com/watch?v=VgSCubeu_Xw" target="_blank">
            <img id="card1" src="./img/event.png" alt=""
          /></a>
                <a id="date1" href="https://www.youtube.com/watch?v=VgSCubeu_Xw" target="_blank">VDA Retreat 2020</a
          >
        </div>
      </div>
    </section>

    <!-- 
    FOOTER -->

    <footer>
      <img id="logo-footer" src="img/logo.png" alt="" />
      <div id="name-withtagline-footer">
        <h1 id="school-name-footer">Vox Dei Academy</h1>
        <h3 id="tagline-footer">Values and Excellence</h3>
      </div>
      <div class="address-contact">
        <p>A.L Ignacio Poblacion 1, General Mariano Alvarez, 4117 Cavite</p>
        <p>Phone: (046) 542 1399</p>
      </div>
      <div class="social-media-icons-footer">
        <a
          href="https://www.facebook.com/VoxDeiAcademy"
          target="_blank"
          class="fa fa-facebook fa-lg"
        ></a>
                <a href="https://www.instagram.com/voxdeiacademy/ " target="_blank" class="fa fa-instagram fa-lg"></a>
                <a href="https://www.youtube.com/channel/UCWeRaQFuJ3zMR7ZTuz8NN8w" target="_blank" class="fa fa-youtube fa-lg"></a>
                <a href="mailto:voxdeiacademy@yahoo.com " target="_blank" class="fa fa-google fa-lg"></a>
            </div>
            </footer>
            <div id="copyright">
                Copyright &copy; 2021 VOX DEI ACADEMY. All Rights Reserved
            </div>

            <script>
                AOS.init();
            </script>
</body>

</html>