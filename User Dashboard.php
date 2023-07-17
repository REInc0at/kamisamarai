<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="icon" href="BG.png" type="image/x-icon">
    <link rel="stylesheet" href="style3.css">

</head>
<body>
  <!-- Navbar Section -->
    <nav class="navbar">
        <div class="navbar__container">
          <a href="index.php" id="navbar__logo"> <img src="img/bg.png" alt=""> COLORYO(U)</a>
          <h1 id="changeText"></h1>
          <div class="navbar__toggle" id="mobile-menu">
            <span class="bar"></span> <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </div>
      </nav>

  <!-- Sidebar Section--> 
      <div class="sidebar">
        <ul>
          <li><button id="User"><i class="uil uil-user"></i>User Profile</button></li>
          <li><button id="Activity"><i class="uil uil-chart"></i>User Activity</button></li>
          <li><button id="Streamline"><i class="uil uil-code-branch"></i>Streamline</button></li>
          <li><button id="Logout" onclick="location.href='logout.php'"><i class="uil uil-signout"></i>Log Out</button></li>
        </ul>
      </div>

    <!-- Camera Section -->
    <div id="container">
      <video autoplay="true" id="videoElement">
      </video>
      </div>
      <div id="container3">
      <iframe src="Streamline.pdf" id="pdf" frameborder="0">
      </iframe>
      </div>
      <video autoplay="true" id="videoElement">
      </video>
      <video autoplay="true" id="videoElement">
      </video>
      <video autoplay="true" id="videoElement">
      </video>
 
    <div class="container2">
        <div class="toggle">
          <div class="toggle-button" onclick="Animatedtoggle();hideShow()"></div>
        </div>
        <div class="text">ON</div>
    </div>
  
 

    <script src="Dashboard.js">

    </script>

</body>
</html>