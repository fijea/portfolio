<!DOCTYPE html>
<html lang="en">
	
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000">
  <title>Jason Ekatama Experience Designer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
	
<body>

  <nav class="navbar navbar-expand-lg fixed-top" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#welcome"><img src="img/logo.png" alt="Jason Ekatama" width="50px" height="auto"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Jason Ekatama</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" href="#works">Works</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#connect">Connect</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
	
  <!-- First section -->
  <div id="welcome" class="parallax-container">
    <video id="videoPlayer" autoplay muted>
      <source src="img/Dark-Ink.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12">
          <h1 class="text-white">Hi, my name is<br><span class="text-orange">Jason Ekatama</span></h1>
          <h2 class="text-white">I specialize in <span id="changingText">UI/X Design</span>.</h2>
        </div>
      </div>
    </div>
    <div class="arrow"></div>
  </div>
  
  <!-- Background Animation
  <script>
    var welcome = document.getElementById('welcome');

    welcome.addEventListener('mousemove', function(event) {
      var mouseX = event.clientX;
      var mouseY = event.clientY;

      var offsetX = Math.round(mouseX / window.innerWidth * 15 - 5);
      var offsetY = Math.round(mouseY / window.innerHeight * 15 - 5);

      welcome.style.backgroundPositionX = offsetX + 'px';
      welcome.style.backgroundPositionY = offsetY + 'px';
    });
  </script> -->

  <!-- Second section -->
  <div id="works" class="parallax-container">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-12">
          <h4 class="text-white-50">/ Works</h4>
        </div>
      </div>
        
      <div class="row">
        
        <div class="thumbnail col-lg-4 col-6" style="background-image: url('img/content/pexels-cottonbro-studio-6153354.jpg');" onclick="window.location.href='empty.html';">
          <div class="thumb-overlay"></div>
          <div class="thumb-title">Creativity x AI</div>
          <div class="thumb-subtitle">2023</div>
        </div>
        
        <div class="col-lg-4"></div>
        
        <div class="thumbnail col-lg-4 col-6" style="background-image: url(http://unsplash.it/300/200);" onclick="window.location.href='empty.html';">
          <div class="thumb-overlay"></div>
          <div class="thumb-title">BNI Life Mobile</div>
          <div class="thumb-subtitle">2021</div>
        </div>
        
        <div class="col-lg-4"></div>
        <div class="thumbnail col-lg-4 col-6" style="background-image: url(http://unsplash.it/300/200);" onclick="window.location.href='empty.html';">
          <div class="thumb-overlay"></div>
          <div class="thumb-title">HR Mobile Companion</div>
          <div class="thumb-subtitle">2021</div>
        </div>
        
        <div class="thumbnail col-lg-4 col-6" style="background-image: url(http://unsplash.it/300/200);" onclick="window.location.href='empty.html';">
          <div class="thumb-overlay"></div>
          <div class="thumb-title">Field Service Operation</div>
          <div class="thumb-subtitle">2021</div>
        </div>
      
        <div class="thumbnail col-lg-4 col-6" style="background-image: url(http://unsplash.it/300/200);" onclick="window.location.href='empty.html';">
          <div class="thumb-overlay"></div>
          <div class="thumb-title">Responsive eCommerce Website</div>
        </div>
        
        <div class="thumbnail col-lg-4 col-6" style="background-image: url(http://unsplash.it/300/200);" onclick="window.location.href='empty.html';">
          <div class="thumb-overlay"></div>
          <div class="thumb-title">Psychology Book Redesign</div>
        </div>
        
        <div class="col-lg-4"></div>
        <div class="col-lg-4"></div>
        
        <div class="thumbnail col-lg-4 col-6" style="background-image: url(http://unsplash.it/300/200);" onclick="window.location.href='empty.html';">
          <div class="thumb-overlay"></div>
          <div class="thumb-title">Youtube Commercials</div>
        </div>
        
      </div> <!-- Row -->
      
    </div>
  </div>

  <!-- Third section -->
  <div id="connect" class="parallax-container">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-12">
          <h4 class="text-black-50">/ Connect</h4>
        </div>
      </div>
      
      <div class="row">
        <div class="profile col-lg-3 col-10 text-center mx-auto">
          <img src="img/jsn.jpg" alt="Jason Ekatama" class="pp img-fluid">
          <h3 class="text-white mt-3">Jason Ekatama</h3>
          <p class="text-white">Experience Designer</p>
          <hr>
          <ul class="social-links">
            <li><a href="https://www.linkedin.com/in/fijea/"><i class="fab fa-linkedin fa-2x"></i></a></li>
          </ul>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <p>&copy; <span id="currentYear"></span> Jason Ekatama. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>
	
</html>

<script src="js/script.js"></script>