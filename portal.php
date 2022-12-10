<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="portal.css" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title></title>
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
            <a href="https://www.facebook.com/VoxDeiAcademy" target="_blank" class="fa fa-facebook fa-lg"></a>
            <a href="https://www.instagram.com/voxdeiacademy/ " target="_blank" class="fa fa-instagram fa-lg"></a>
            <a href="https://www.youtube.com/channel/UCWeRaQFuJ3zMR7ZTuz8NN8w" target="_blank" class="fa fa-youtube fa-lg"></a>
            <a href="mailto:voxdeiacademy@yahoo.com " target="_blank" class="fa fa-google fa-lg"></a>
        </div>
        </div>
    </section>

    <!-- MAIN BODY -->

    <div class="menus" data-aos="zoom-out" data-aos-duration="1000">
        <!-- <a href=""><button id="register">
          <i class="fas fa-clipboard-list"></i> <br />
          Online Registrations
        </button></a
      > -->
        <a href="./adminlogin.php"><button>
          <i class="fas fa-folder-open"></i>
          <br />
          Registrar <br> Department
        </button></a
      >
      <a href="./adminlogin.php"
        ><button>
          <i class="fas fa-chalkboard-teacher"></i> <br />
          Guidance<br>Department
        </button></a>
      <br />
      <a href="./adminlogin.php"
        ><button>
          <i class="fas fa-dollar-sign"></i> <br />
          Accounting<br>
          Department
        </button></a
      >
      <a href="./studentlogin.php"
        ><button>
          <i class="fas fa-users"></i> <br />
          Student <br>
          Portal
        </button></a
      >
 

      <a href="./index.php"
        ><button>
          <i class="fas fa-sign-out-alt"></i>
          <br />
      
          Back to <br>
          Homepage
        </button></a
      >
    </div>

    <script>
      AOS.init();
    </script>
  </body>
</html>