<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons -->
<link rel="shortcut icon" href="favicon.png">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

<title>Ramsay - One page HTML Template</title> 

<!-- Styles -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400i&display=swap" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" media="screen">
</head>
<body>
  <div class="animsition">  
    <div class="loader"><div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div></div>

    <!-- Content CLick Capture-->

    <div class="click-capture"></div>

    <!-- Menu -->

    <header class="navbar navbar-fullpage boxed">
      <div class="navbar-bg"></div>
      <a class="brand" href="#">
        <img alt="" src="images/brand.png">
        <div class="brand-info">
          <div class="brand-name">Ramsay</div>
        </div>
      </a>
    <nav class="menu-navigation">
      <a href="#" class="menu-icon-toggle"><span></span></a>
		
      <i class="menu-background top"></i>
      <i class="menu-background middle"></i>
      <i class="menu-background bottom"></i>
		
      <ul class="menubar">
        <li><a href="#">Home</a></li>
        <li><a href="index.html#page2">About</a></li>
        <li><a href="index.html#page3">Skill</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="index.html#page5">Get in touch</a></li>
      </ul>
		 <div class="menu-footer right-boxed">
        <div class="">© Ubiquitous 2025. All Rights Reseverd</div>
      </div>
    </nav>  
		
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
  $('.menu-icon-toggle').on('click', function(e) {
  $('body').toggleClass('open');

  e.preventDefault();
});
</script>		
		
    </header>
	  
    <!-- Menu -->
	




<!--popup-->

  <style>
    body {
      height: 2000px; /* just to make page scrollable */
      font-family: Arial, sans-serif;
    }

    .popup {
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 250px;
      padding: 15px;
      background: #000;
      color: #fff;
      border-radius: 8px;
      display: none; /* hidden by default */
      transition: opacity 0.3s ease;
    }

    .popup.show {
      display: block;
      opacity: 1;
    }
  </style>


  <div class="popup" id="popup">
    This is the popup box
  </div>

  <script>
    const popup = document.getElementById('popup');
    let scrollTimer;

    // Show popup when not scrolling
    function showPopup() {
      popup.classList.add('show');
    }

    // Hide popup while scrolling
    function hidePopup() {
      popup.classList.remove('show');
    }

    window.addEventListener('scroll', () => {
      hidePopup(); // hide immediately when scrolling

      // clear previous timer
      clearTimeout(scrollTimer);

      // set timer to show popup again after user stops scrolling
      scrollTimer = setTimeout(showPopup, 800); // adjust delay as needed
    });

    // show popup initially
    showPopup();
  </script>

<!--popup-->






        

    <div class="content">
      <div class="container">
        <div class="row row-project">
          <div class="col-project-name col-md-6  mt-5 mb-5 mb-md-0"  >
            <h1>SuperMaMa Classroom</h1>
            <!--div class="social-list social-list-detail">
              <a href="" class="icon ion-social-twitter"></a>
              <a href="" class="icon ion-social-facebook"></a>
              <a href="" class="icon ion-social-googleplus"></a>
              <a href="" class="icon ion-social-linkedin"></a>
              <a href="" class="icon ion-social-dribbble-outline"></a>
            </div-->
          </div>



          <div class="col-project-info col-md-6">
            <div class="row">
              <div class="col-md-6 mt-5">
                <h5>Client</h5>
                <p>SuperMaMa Classroom</p>
              </div>
              <div class="col-md-6 mt-5">
                <h5>Services</h5>
                <p>Branding, Logo Design, Exhibition</p>
              </div>
              <div class="col-md-6 mt-5 half">
                <h5>Date</h5>
                <p>2022</p>
              </div>
              <div class="col-md-6 mt-5 half">
                <h5>Link</h5>
                <a href="#" target="_blank"><div class="icon-hyerlink"><img src="images/icon-link.png"></div></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img alt="" class="image-holder-b wow fadeIn" src="images/project/project3.jpg">
      <div class="container">
        <div class="project-detail-text text-justify"><h6 class="resume-type">Background﹕</h3>
          <p >Supermama business is related to real estate information, wealth management, decoration design, property sales and other related issues. The design goal of the logo is a robust, reliable and professional feel. Supermama provides various home buying information for novice homeowners, and hope everyone can live and work in peace and contentment.
 </p>
        </div>
        <img alt="" class="image-holder wow fadeInLeft" src="images/project/project3-1.jpg">

        <div class="row">
        <div class="img-half col-md-6  mb-md-0 ">
        <img alt="" class="image-holder wow fadeInLeft" src="images/project/project3-2.jpg"></div>
        <div class="img-half col-md-6  mb-md-0 ">
        <img alt="" class="image-holder wow fadeInRight" src="images/project/project3-2.jpg"></div>
          </div>

        <div class="project-detail-text text-justify"><h6 class="resume-type">Concept of design﹕</h6>
          <p>The logo is a hexagon with rounded corners. The hexagon associates the house of bees, it is a metaphor for citizens work hard to earn money to buy a house. The main structure of the logo is a cabin or regular cube. The cube feels stable, it echoes the design goal to give people a reliable and professional feeling. The three logos of the three services are all based on this basis, but there are subtle differences, and three services are separated. In structure, the cabin is compose of the character "叻" in "叻媽" and the roof. the character "叻" constitute the house, the windows and chimney. It means the Super mama’s service can help you build a well-off home and live and work in peace and contentment.</p>

        </div>
        <img alt="" class="image-holder wow fadeInRight" src="images/project/project3-1.jpg">
       </div>
      </div>


    <div class="copy-bottom grey boxed"><div>© Ubiquitous 2025.</div></div>
    </div>


<!-- jQuery -->

<script src="js/jquery.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/animsition.js"></script>

<!-- Scripts -->
<script src="js/scripts.js"></script> 
</body>
</html>