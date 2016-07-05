<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Adtile Fixed Nav</title>
    <meta name="author" content="Adtile">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/wf-style.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/4.0.5/sweetalert2.min.css">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
     <script src="https://use.fontawesome.com/b71c8a75a7.js"></script>

    <script src="js/responsive-nav.js"></script>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,500italic,700,700italic|Roboto+Mono:400,500,700|Material+Icons">
  </head>
  <body>

    <header>
        <div class="header-container">
          <i class="fa fa-camera fa-2x logo-img" ></i><a href="<?= $_SERVER['REQUEST_URI']; ?>" class="logo" data-scroll> GameSnap</a>
          <nav class="nav-collapse">
            <ul>

              <li class="menu-item "><a class="login" href="/login"><i class="fa fa-users"></i> Login</a></li>
              <li class="menu-item "><a class="share" href="/share"  ><i class="fa fa-share"></i> Share</a></li>

            </ul>
          </nav>
        </div>
    </header>

      
      

      
<section id="content">

@yield('content')
</section>


     
      <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

    <script src="js/vendor/responsive_waterfall.js"></script>
    


    <script src="https://cdn.jsdelivr.net/sweetalert2/4.0.5/sweetalert2.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/fixed-responsive-nav.js"></script>
      <script>
      
      // use querySelector/querySelectorAll internally
var waterfall = new Waterfall({
    containerSelector: '.wf-container',
    boxSelector: '.wf-box',
    minBoxWidth: 400
});
      </script>
  </body>
</html>
