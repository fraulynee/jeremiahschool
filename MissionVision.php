<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="MissionVison.css" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="//db.onlinewebfonts.com/c/f3258385782c4c96aa24fe8b5d5f9782?family=Old+English+Text+MT" rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <title>Mission Vision</title>
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
                <a href="#" target="_blank" class="fa fa-facebook fa-lg"></a>
                <a href="#" target="_blank" class="fa fa-instagram fa-lg"></a>
                <a href="#" target="_blank" class="fa fa-youtube fa-lg"></a>
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
    <div data-aos="zoom-in">
    <section id="vision-container">
      <h1 class="headings">VISION STATEMENT</h1>
      <p class="headings-content">
      As we knows that a school is a learning environment, thence, <b>JEREMIAH MONTESSORI SCHOOL</b> in its existence is looking forward for the brightest future of the childen that are part in the present, past, and future of the school and the community.<br>
         <br>
         We see our students becoming successful and independent individuals as they face the challege of the past changing environment in the future.
         <br><br>
         Each students will bring legacy to the Institution and will become a whole person responsible to this actiopn and is a source of the Intelligent ideas and decision, yet humble enough to reflect the values and good morals that he/she learned in the Montessori environment.<br><br>
         All for the glory of God!
      </p>
      <div id="mission-container">
        <h1 class="headings">MISSION STATEMENT</h1>
        <p class="headings-content">
        <b><i>"TRAIN UP A CHILD IN A WAY HE SHOULD GO, AND WHEN HE GETS OLD HE WILL NOT DEPARTFROM IT" <BR></b></i>
      In our Montessori environment and with the competent teaching staffs, we are aiming to provide the executive learning to the childrin with the old-fashioned subjects yet advance methods of teaching. It is our school's previledge to influence and:<br>
      - To implement the subject areas widely and advanced in training the children and preparing them to the fiurther range of their educations;<br>
      - To provide the facilities that are students friendly where in every area of campus is a learning station;<br>
      - To inculcate the higher moral and to fully develop the spiritual, physical and intellectual being of each child;<br>
      - To impress the children's mind the importance of obedience and respect to the authorities at school and at home, and the initiative of helping others, <br>
      - To make each students see the values and pride of being a Filipino, hence, they should love and lift our nation, the Philippines, <br>
      - To develop trustworthy, independent, courteous, and descipline students appreciating their uniqueness and fully determined to succeed and serve fellowmen, the country and our Lord God.
        </p>
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
        <p>Phone: (046) -</p>
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