<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="seal.css" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="//db.onlinewebfonts.com/c/f3258385782c4c96aa24fe8b5d5f9782?family=Old+English+Text+MT" rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <title>The School Seal</title>
</head>

<body>
    <section id="header">
    <a href="./index.php" style="text-decoration: none">
            <img id="logo" src="img/1.png" />
            <div id="name-withtagline">
                <h1 id="schhol-name">Jeremiah Montessori School</h1>
                <h3 id="tagline">Values and Excellence</h3>
        </a>
            <div class="social-media-icons">
                <a href="https://www.facebook.com/htu" target="_blank" class="fa fa-facebook fa-lg"></a>
                <a href="https://www.instagram.com/htu/ " target="_blank" class="fa fa-instagram fa-lg"></a>
                <a href="https://www.youtube.com/channel/htu" target="_blank" class="fa fa-youtube fa-lg"></a>
                <a href="#" target="_blank" class="fa fa-google fa-lg"></a>
            </div>
        </div>
    </section>

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

        <a href="javascript:void(0);" style="font-size: 20px" class="icon" onclick="myFunction()">&#9776;</a
      >
    </div>
    <script src="./navbar.js"></script>

    <!-- MAIN BODY -->
    <div data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">




    <section id="philosophy-container">
      <h1 class="headings" id="seal-heading">THE SCHOOL SEAL</h1>
      <img src="./img/1.png" alt="logo" id="seal-logo" />
      <p class="headings-content" id="seal-content">
        The school seal was derived from Martin Luther Seal. Martin Luther was a
        German monk who started church reformation in the 16th century and
        believed that man is saved by grace through his faith. A heart in the
        middle of the white rose show that faith gives joy, comfort and peace.
        The rose petal is white and not red because white represents the color
        of Spirit and Angels. The rose is in blue background which symbolizes
        joy in spirit and faith. Triangle in the heart symbolizes the Holy
        Trinity as the basis of our Christian faith. The Black Cross in a heart
        reminded us that faith in the Crucified saves us. The Crown symbolizes
        Christ as the King of kings. The Bible as the foundation of our
        Christian values and the flaming Torch signifies the ardent desire for
        learning.
      </p>
    </section>
    </div>

    <footer>
      <img id="logo-footer" src="./img/1.png" alt="" />
      <div id="name-withtagline-footer">
        <h1 id="schhol-name">Jeremiah Montessori School</h1>
        <h3 id="tagline">Values and Excellence</h3>
      </div>
      <div class="address-contact">
        <p>CALAMBA LAGUNA</p>
        <p>Phone: </p>
      </div>
      <div class="social-media-icons-footer">
        <a
          href="https://www.facebook.com/htu"
          target="_blank"
          class="fa fa-facebook fa-lg"
        ></a>
        <a href="https://www.instagram.com/htu/ " target="_blank" class="fa fa-instagram fa-lg"></a>
        <a href="https://www.youtube.com/channel/htu" target="_blank" class="fa fa-youtube fa-lg"></a>
        <a href="mailto:voxdeiacademy@yahoo.com " target="_blank" class="fa fa-google fa-lg"></a>
    </div>
    </footer>
    <div id="copyright">
        Copyright &copy; 2022 Jeremiah Montessori School. All Rights Reserved
    </div>


    
    
    <script>
  AOS.init();
</script>
</body>

</html>