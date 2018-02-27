<!DOCTYPE html>
<html lang="en">
<head>
  <title>KAHMI | Forgot Password</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic%7COpen+Sans:400,600,700,400italic' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="revolution/css/settings.css" />
  <link rel="stylesheet" href="css/rev-slider.css" />
  <link rel="stylesheet" href="css/sliders.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <link rel="stylesheet" href="css/spacings.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/color.css" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<body style="font-family: 'Open Sans', sans-serif;">

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      "Loading..."
    </div>
  </div>

  <header class="nav-type-2">
    
    <nav class="navbar navbar-static-top">
      <div class="navigation">
        <div class="container relative">

          <form method="get" class="search-wrap">
            <input type="search" class="form-control" placeholder="Type &amp; Hit Enter">
          </form>

          <div class="row">

            <div class="navbar-header">
              <!-- Logo -->
              <div class="logo-container">
                <div class="logo-wrap">
                  <a href="index-mp.html">
                    <img class="logo" src="img/logo_dark.png" alt="logo">
                  </a>
                </div>
              </div>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div> <!-- end navbar-header -->

            <div class="col-md-9 nav-wrap right">
              <div class="collapse navbar-collapse" id="navbar-collapse">
                
                <ul class="nav navbar-nav navbar-right">

                  <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME</a>
                  </li>

                  <li class="dropdown">
                    <a href="about">KAHMI PRENEUR</a>
                  </li>

                  <li class="dropdown">
                    <a href="movie">VIDEO</a>
                  </li>

                  <li class="dropdown">
                    <a href="berita">BERITA</a>
                  </li>

                  <li class="dropdown active">
                    <a href="#" class="dropdown-toggle">PENDAFTARAN</a>
                    <ul class="dropdown-menu menu-right">
                      <li><a href="{{ route('login') }}">Log in</a></li>
                      <li><a href="{{ route('register') }}">Sign Up</a></li>
                    </ul>
                  </li>

                  <li id="mobile-search">
                    <form method="get" class="mobile-search">
                      <input type="search" class="form-control" placeholder="Search...">
                      <button type="submit" class="search-button">
                        <i class="fa fa-search"></i>
                      </button>
                    </form>
                  </li>

                  <li>
                    <a href="#" class="nav-search">
                      <i class="fa fa-search search-trigger"></i>
                      <i class="fa fa-times search-close"></i>
                    </a>
                  </li> 
                  
                </ul> <!-- end menu -->
              </div> <!-- end collapse -->
            </div> <!-- end col -->
            
          </div> <!-- end row -->
        </div> <!-- end container -->
      </div> <!-- end navigation -->
    </nav> <!-- end navbar -->
  </header>


  <div class="main-wrapper-mp oh">

    <!-- Page Title -->
    <section class="page-title style-2">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1>FORGOT PASSWORD</h1>
            <ol class="breadcrumb">
              <li>
                <a href="welcome">Home</a>
              </li>
              <li>
                <a href="#">Register</a>
              </li>
              <li>
                <li><a href="{{ route('login') }}">Log in</a></li>
              </li>
              <li class="active">
                Forgot Password
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section> <!-- end page title -->


    <!-- Accordions & Tabs -->



            
      <div class="bottom-footer">
        <div class="container">
          <div class="row">

            <div class="col-sm-6 col-xs-12 copyright">
              <span>
                © 2018 KAHMI PRENEUR  |  Made by <a href="http://gjidigital.com">Global Jaring Indonesia</a>
              </span>
            </div>
              
            <div class="col-sm-4 col-sm-offset-2 col-xs-12 footer-socials">
              <div class="social-icons clearfix right">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>                  
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-vimeo"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div> <!-- end bottom footer -->
    </footer> <!-- end footer -->

    <div id="back-to-top">
      <a href="#top"><i class="fa fa-angle-up"></i></a>
    </div>

  </div> <!-- end main-wrapper -->
  
  <!-- jQuery Scripts -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>

</body>
</html>