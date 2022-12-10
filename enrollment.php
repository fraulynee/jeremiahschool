<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="enrollment.css" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="//db.onlinewebfonts.com/c/f3258385782c4c96aa24fe8b5d5f9782?family=Old+English+Text+MT" rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Enrollment</title>
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
            <a href="# " target="_blank" class="fa fa-google fa-lg"></a>
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
          
                <a class="services" href="./enrollment.php">Enrollment  </a>
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
    <main>
    <section class="enrollment" data-aos="fade-up">
      <h1>ENROLLMENT PROCEDURES</h1>
      <hr>
      <br />
      <br />
      <!-- <h3>New Students:</h3>
      <br />
    
      <ol class="steps">
        <li>
          Fill up the registration form here: <a href="./registration.php" target="_blank" style="color:blue;">VDARegistrationForm</a> and present all admission requirements to the Registrar’s Office .
        </li> <br />
        <li>
            Supply in all pertinent information in the registration form and submit to the Assessor to determine the amount due.
        </li> <br />
        <li>
            Pay the assessed amount to the cashier and present the receipt to the Registrar’s Office. <br /><br />
        </li>
        </ol>

        <h3>Old Students:</h3>
        <br />

        <ol class="steps">
            <li>
                Fill up the registration form here: <a href="./registration.php" target="_blank" style="color:blue;">VDARegistrationForm </a> Present the report card and the reservation fee receipts to the Registrar’s Office.
            </li> <br />
            <li>
                Supply in all pertinent information in the registration form and submit to the Assessor to determine the amount due.
            </li> <br />
            <li>
                Pay the assessed amount to the cashier and present the receipt to the Registrar’s Office.
                <br /><br /><br /><br />
                <br />
            </li>
        </ol> -->

        <div class="row">
            <div class="column">
                <h3>New Students:</h3>
                <br />

                <ol class="steps">
                    <li>
                        Fill up the registration form here: <a href="./registration.php" target="_blank" style="color:blue;">JMSRegistrationForm</a> and present all admission requirements to the Registrar’s Office .
                    </li> <br />
                    <li>
                        Supply in all pertinent information in the registration form and submit to the Assessor to determine the amount due.
                    </li> <br />
                    <li>
                        Pay the assessed amount to the cashier and present the receipt to the Registrar’s Office. <br /><br />
                    </li>
                </ol>
            </div>
            <div class="column">
                <h3 id="old">Old Students:</h3>
                <br />

                <ol class="steps">
                    <li>
                        Fill up the registration form here: <a href="./registration.php" target="_blank" style="color:blue;">JMSRegistrationForm </a> Present the report card and the reservation fee receipts to the Registrar’s Office.
                    </li> <br />
                    <li>
                        Supply in all pertinent information in the registration form and submit to the Assessor to determine the amount due.
                    </li> <br />
                    <li>
                        Pay the assessed amount to the cashier and present the receipt to the Registrar’s Office.
                        <br /><br /><br /><br />
                        <br />
                    </li>
                </ol>
            </div>
        </div>
        </section>
        </main>

        <!-- 
    FOOTER -->
        <br> <br> <br> <br> <br> <br> <br>
        <footer>
            <img id="logo-footer" src="./img/1.png" alt="">
            <div id="name-withtagline-footer">
                <h1 id="school-name-footer">Jeremiah Montessori School</h1>
                <h3 id="tagline-footer">Values and Excellence</h3>
            </div>
            <div class="address-contact">
                <p>CABUYAO LAGUNA</p>
                <p>Phone: </p>
            </div>
            <div class="social-media-icons-footer">
                <a href="https://www.facebook.com/Holy Trinity University" target="_blank" class="fa fa-facebook fa-lg"></a>
                <a href="https://www.instagram.com/Holy Trinity University/ " target="_blank" class="fa fa-instagram fa-lg"></a>
                <a href="https://www.youtube.com/channel/Holy Trinity University" target="_blank" class="fa fa-youtube fa-lg"></a>
                <a href="#" target="_blank" class="fa fa-google fa-lg"></a>
            </div>
        </footer>
        <div id="copyright">Copyright &copy; 2021 Jeremiah Montessori School. All Rights Reserved</div>
        <script>
            AOS.init();
        </script>
</body>

</html>