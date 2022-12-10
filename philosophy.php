<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="philosophy.css" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="//db.onlinewebfonts.com/c/f3258385782c4c96aa24fe8b5d5f9782?family=Old+English+Text+MT" rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>JMS ABOUT</title>
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
            <a href="#" target="_blank" class="fa fa-facebook fa-lg"></a>
            <a href="#" target="_blank" class="fa fa-instagram fa-lg"></a>
            <a href="#" target="_blank" class="fa fa-youtube fa-lg"></a>
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
    <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
      <section id="philosophy-container">
        <h1 class="headings">EDUCATIONAL HISTORY</h1>
        <p class="headings-content">
        Jeremiah Montessori School is the pioneer institution of higher learning in Calamba established in 1940 as the Jeremiah Montessori School. The first administrators of the Academy were Rev. Mother Cruz Rich, O.P., Rev. Mother Paulina Cruz, O.P., and Rev. Mother Trinidad Acosta, O.P., who worked in close cooperation with the Augustinian Recollect priests under the leadership of Msgr. Leandro Nieto, ORSA, the Prefect Apostolic of Palawan. The first courses offered were Kindergarten and Elementary level, followed by the secondary level. On September 10, 1950 with Sisters Amparo Bautista, O.P. as the first Directress, HTC rose to become a Junior College and opened the following courses: Elementary Teacher’s Certificate (ETC), Vocational Stenography and Typing.
        </p>

        <br />
        <div id="objectives">
          <h1 class="headings">JMS OBJECTIVES</h1>
          <ol class="headings-content" id="lists">
            <li>
              Ensure opportunity for the acquisition of fundamental and advanced
              knowledge and experiences as well as the development of wholesome
              attitudes and habits through the different academic disciplines.
            </li>
            <br />
            <li>
              Emphasize Christian values and discipline in the school curriculum
              and application in daily life activities.
            </li>
            <br />
            <li>
              Acquire, utilize relevant and updated instructional materials and
              facilities to enrich classroom teaching and learning.
            </li>
            <br />
            <li>
              Upgrade faculty teaching competencies through seminars, workshops,
              symposia and educational-professional training.
            </li>
            <br />
            <li>
              Initiate and promote a healthy and harmonious school environment
              for the development of civic, spiritual / moral and intellectual
              well-being of the studentry.
            </li>
            <br />
            <li>
              Strenghten school-community linkage for the development and proper
              monitoring of student’s academic performance and attainment of
              educational objectives.
            </li>
          </ol>
        </div>
      </section>
    </div>

    <footer>
       <img id="logo" src="./img/1.png" />
            <div id="name-withtagline">
                <h1 id="schhol-name">Jeremiah Montessori School</h1>
                <h3 id="tagline">Values and Excellence</h3>
      </div>
      <div class="address-contact">
        <p>CALAMBA LAGUNA</p>
        <p>Phone: (046)-</p>
      </div>
      <div class="social-media-icons-footer">
        <a
          href="#"
          target="_blank"
          class="fa fa-facebook fa-lg"
        ></a>
        <a href="# " target="_blank" class="fa fa-instagram fa-lg"></a>
        <a href="#" target="_blank" class="fa fa-youtube fa-lg"></a>
        <a href="#" target="_blank" class="fa fa-google fa-lg"></a>
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