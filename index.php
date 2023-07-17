
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>COLORYO(U)</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
          crossorigin="anonymous" 
          referrerpolicy="no-referrer"
        />
    <link rel="icon" href="BG.png" type="image/x-icon">
  </head>
  <body>
    <!-- Navbar Section -->
    <nav class="navbar">
      <div class="navbar__container">
        <a href="#home" id="navbar__logo"> <img src="img/bg.png" alt=""> COLORYO(U)</a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="#about" class="navbar__links" id="about-page">About</a>
          </li>
          <li class="navbar__item">
            <a href="#features" class="navbar__links" id="features-page">Features</a>
          </li>
          <li class="navbar__item">
            <a href="#team" class="navbar__links" id="team-page">Team</a>
          </li>
          <li class="navbar__btn">
            <a href="login.php" class="button" id="signin">Sign In</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero" id="home">
      <div class="hero__container">
        <div class="hero__content">
          <h1 class="hero__heading">See beyond the <span>colors</span></h1>
          <h2> Don't let colors limit you</h2>
        <button class="hero__btn"><a href="signup.php">Get Started</a></button>
        </div>
        <div class="hero__img--container">
          <img class="photo" src="img/design.png" alt="" id="hero__img">
        </div>
      </div>
    </div>

    <!-- About Section -->
    <div class="about" id="about">
      <div class="about__container">
        <div class="about__img--container">
          <div class="about__img--card"><img class="content__img" src="img/1.png" alt="a computer and our logo"></div>
        </div>
        <div class="about__content">
          <h2>ABOUT US</h2>
          <p>We are students on a journey. For every individual experiencing color vision 
            deficiency trying to land that dream course in college, or individuals hoping 
            to be accepted in their dream company, or just trying to get their driver's 
            license, we came up with a solution by creating Coloryo(U), a simple chromatic 
            identifier system. With Coloryo(U), individuals with the color vision deficiency 
            will have no problem identifying colors again.
          </p>
        </div>
      </div>
    </div>

    <!-- features Section -->
    <div class="features" id="features">
      <h1>COLORYO(U)'S FEATURES</h1>
      <div class="features__wrapper">
        <div class="features__card">
          <i class="fa-solid fa-eye fa-2xl"></i>
          <h2>Single Color <br> Detection</h2>
          <p>When using single color identification, the user must place the object within 
            the mark and center of the screen to be able to identify the color.
          </p>
        </div>
        <div class="features__card">
          <i class="fa-solid fa-swatchbook fa-2xl"></i>
          <h2>Multiple Color <br> Detection</h2>
          <p>When the user is on multiple color detection mode, 
            all the colors in one frame is identified
          </p>
        </div>
        <div class="features__card">
        <i class="fa-solid fa-arrows-to-eye fa-2xl"></i>
          <h2>Assessment</h2>
          <p>The system will have a feature of 
            assessment wherein they will try to answer to determine what kind of CVD the user has
          </p>
        </div>
        <div class="features__card">
        <i class="fa-solid fa-display fa-2xl"></i>
          <h2>Filter</h2>
          <p>The filter feature can only be accessible by users 
            who took the assessment. The filter is based on the users CVD
          </p>
        </div>
      </div>
    </div>

  <!-- Team Section -->
  <div class="team" id="team">
    <div class="team__heading">
      <h1>COLORYO(U)'S TEAM</h1>
      <div class="container1">
        <div class="card1">
            <img src="img/sheena.jpg" alt="sheena">
            <div>
                <h2>Sheena Patricia</h2>
                <h3>Documentation Team</h3>
                <p>I'm Sheena Patricia Orquin, a 3rd-year student at National Teachers College 
                  taking up a Bachelor of Science in Information Technology, and I am part of 
                  the documentation team. Technology is a learning tool for me, making it 
                  easier to convey information and concepts in novel and captivating ways.
                </p>
            </div>
          </div>
      </div>

    <div class="container2">
        <div class="card2">
            <img src="img/rhea.png" alt="chainsaw_man">
            <div>
                <h2>Rhea Salvoro</h2>
                <h3>Documentation Team</h3>
                <p>I'm Rhea Rosales Salvoro, a 3rd Year BSIT student at National Teachers 
                  College who is part of the Documentation team. BSIT is in demand in today's 
                  generation, and I believe we must build a technology that will help our 
                  community since we are widely open to innovations coming our way.
                </p>
            </div>
        </div>
    </div>

    <div class="container3">
        <div class="card3">
            <img src="img/queenie.jpg" alt="chainsaw_man">
            <div>
                <h2>Queenie Magtoto</h2>
                <h3>Documentation Team</h3>
                <p>I'm Queenie Magtoto, a 3rd-year college student in the Bachelor of Science 
                  Information Technology (BSIT) course at the National Teachers College, and 
                  I am part of the documentation team. Pursuing a BSIT degree equips me with 
                  the skills to succeed in various technology-related fields and positively 
                  impact society.
                </p>
            </div>
        </div>
    </div>
    
    <div class="container4">
        <div class="card4">
            <img src="img/rai.jpg" alt="chainsaw_man">
            <div>
                <h2>Raisen Villar</h2>
                <h3>Programmer</h3>
                <p>I am Raisen Villar, a 3rd Year student at National Teachers College and 
                  enrolled as a BSIT student. I am one of the programmers and the group leader 
                  of COLORYO(U). Information Technology is a rapidly developing field, a global 
                  economy, and a powerful tool, and it's shaping the world we live in.
                </p>
            </div>
        </div>
    </div>

    <div class="container5">
      <div class="card5">
          <img src="img/pagala.JPG" alt="chainsaw_man">
          <div>
              <h2>Mark Vincent O. Pagala</h2>
              <h3>Programmer</h3>
              <p>I am Mark Vincent O. Pagala, a 3rd Year student at National Teachers College and 
                enrolled as a BSIT student. I am one of the programmers 
                of COLORYO(U). Information Technology is a rapidly developing field, a global 
                economy, and a powerful tool, and it's shaping the world we live in.
              </p>
          </div>
      </div>
  </div>
</div>
    </div>

    <!-- Footer Section -->
    <div class="footer__container">
      <div class="footer__links">
        <div class="footer__link--wrapper">
          <div class="footer__link--items">
            <h2>About Us</h2>
            <a href="/sign__up">How it works</a> <a href="/">Testimonials</a>
            <a href="/">Careers</a> <a href="/">Terms of Service</a>
          </div>
          <div class="footer__link--items">
            <h2>Contact Us</h2>
            <a href="/">Contact</a> <a href="/">Support</a>
            <a href="/">Destinations</a>
          </div>
        </div>
        <div class="footer__link--wrapper">
          <div class="footer__link--items">
            <h2>Videos</h2>
            <a href="/">Submit Video</a> <a href="/">Ambassadors</a>
            <a href="/">Agency</a>
          </div>
          <div class="footer__link--items">
            <h2>Social Media</h2>
            <a href="/">Instagram</a> <a href="/">Facebook</a>
            <a href="/">Youtube</a> <a href="/">Twitter</a>
          </div>
        </div>
      </div>
      <section class="social__media">
        <div class="social__media--wrap">
          <div class="footer__logo">
            <a href="/" id="footer__logo">COLORYO(U)</a>
          </div>
          <p class="website__rights">© COLORYO(U) 2020. All rights reserved</p>
          <div class="social__icons">
            <a href="/" class="social__icon--link" target="_blank"
              ><i class="fab fa-facebook"></i
            ></a>
            <a href="/" class="social__icon--link"
              ><i class="fab fa-instagram"></i
            ></a>
            <a href="/" class="social__icon--link"
              ><i class="fab fa-youtube"></i
            ></a>
            <a href="/" class="social__icon--link"
              ><i class="fab fa-linkedin"></i
            ></a>
            <a href="/" class="social__icon--link"
              ><i class="fab fa-twitter"></i
            ></a>
          </div>
        </div>
      </section>
    </div>

    <script src="app.js"></script>
  </body>
</html>