<!DOCTYPE html>
<html>
<head>
<title>Phuket Trip Info</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<meta name="author" content="Codrops" />
<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" type="text/css" href="packageslider/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="packageslider/css/demo.css" />
<link rel="stylesheet" type="text/css" href="packageslider/css/component.css" />
<script src="packageslider/js/modernizr.custom.js"></script>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-7243260-2']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demoheader.jpg');">
  <!-- ################################################################################################ -->
  <?php include('header.php'); ?>
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear">
    <!-- ################################################################################################ -->
    <article class="clear">
      <h2 class="heading">text</h2>
      <p>text</p><br><br>
      <footer><a class="btn" id="gobuttom" href="#samplepic"><i class="fa fa-chevron-down"></i></a></footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<div class="wrapper row6" id="samplepic">
  <div class="hoc container clear">
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h3 class="font-x2 nospace">Some pic</h3>
      <p class="nospace">pic from tour</p>
    </div>
    <ul class="nospace group btmspace-50 elements">
      <li class="one_third first btmspace-30">
        <figure><img src="images/demo/320x240.png" alt="">
          <figcaption><a href="#">Elementum</a></figcaption>
        </figure>
      </li>
      <li class="one_third btmspace-30">
        <figure><img src="images/demo/320x240.png" alt="">
          <figcaption><a href="#">Pharetra</a></figcaption>
        </figure>
      </li>
      <li class="one_third btmspace-30">
        <figure><img src="images/demo/320x240.png" alt="">
          <figcaption><a href="#">Consectetur</a></figcaption>
        </figure>
      </li>
      <li class="one_third first">
        <figure><img src="images/demo/320x240.png" alt="">
          <figcaption><a href="#">Imperdiet</a></figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="images/demo/320x240.png" alt="">
          <figcaption><a href="#">Fringilla</a></figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="images/demo/320x240.png" alt="">
          <figcaption><a href="#">Consequat</a></figcaption>
        </figure>
      </li>
    </ul>
    <p class="nospace center"><a class="btn" href="gallery.php">See all pic</a></p>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>

<div class="wrapper row3">
  <section class="hoc container clear">
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h3 class="font-x2 nospace">Sample Tour Package</h3>
    </div>
    <div class="group center">
<div class="container">
  <div class="slideshow" id="slideshow">
    <ol class="slides" style="background-color:#ffffff;">
      <li class="current">
        <div class="description">
          <h2>Tilted Content Slideshow</h2>
          <p>This slider, as seen on the landing page of the <a href="http://www.thefwa.com/">FWA</a>, plays with 3D perspective and performs some interesting animations on the right-hand side images.</p>
        </div>
        <div class="tiltview col">
          <a href="http://grovemade.com/"><img src="packageslider/img/1_screen.jpg"/></a>
          <a href="https://tsovet.com/"><img src="packageslider/img/2_screen.jpg"/></a>
        </div>
      </li>
      <li>
        <div class="description">
          <h2>CSS Animations</h2>
          <p>We are using 12 different animations for showing and hiding the items of a slide. The animations are defined by randomly adding data-attributes called <code>data-effect-in</code> and <code>data-effect-out</code> for every slide. </p>
        </div>
        <div class="tiltview row">
          <a href="http://pexcil.com/"><img src="packageslider/img/3_mobile.jpg"/></a>
          <a href="http://foodsense.is/"><img src="packageslider/img/4_mobile.jpg"/></a>
        </div>
      </li>
      <li>
        <div class="description">
          <h2>Tilted Items</h2>
          <p>The perspective view is achieved by adding a perspective value to the slide list item and tilting a division that contains the two screenshots.</p>
        </div>
        <div class="tiltview col">
          <a href="http://minimalmonkey.com/"><img src="packageslider/img/5_screen.jpg"/></a>
          <a href="http://www.herschelsupply.com/"><img src="packageslider/img/6_screen.jpg"/></a>
        </div>
      </li>
      <li>
        <div class="description">
          <h2>Column or Row</h2>
          <p>The items in the tilted container are either laid out in a column or in a row. For some directions we need to adjust the animation delays for the items, since we don't want the items to overlap each other when they move in or out.</p>
        </div>
        <div class="tiltview row">
          <a href="http://grovemade.com/"><img src="packageslider/img/1_mobile.jpg"/></a>
          <a href="https://tsovet.com/"><img src="packageslider/img/2_mobile.jpg"/></a>
        </div>
      </li>
      <li>
        <div class="description">
          <h2>Responsiveness</h2>
          <p>For smaller screens, the items on the right hand side will become less opaque and serve as decoration only. The focus will be on the description which will occupy all the width.</p>
        </div>
        <div class="tiltview col">
          <a href="http://pexcil.com/"><img src="packageslider/img/3_screen.jpg"/></a>
          <a href="http://foodsense.is/"><img src="packageslider/img/4_screen.jpg"/></a>
        </div>
      </li>
      <li>
        <div class="description">
          <h2>Navigation</h2>
          <p>For the "line" navigation we use a little trick to make the clickable area a bit bigger: we add a thick white border to the top and bottom of the span. Since the border is part of the element, it will be part of the clickable zone.</p>
        </div>
        <div class="tiltview row">
          <a href="http://minimalmonkey.com/"><img src="packageslider/img/5_mobile.jpg"/></a>
          <a href="http://www.herschelsupply.com/"><img src="packageslider/img/6_mobile.jpg"/></a>
        </div>
      </li>
    </ol>
  </div><!-- /slideshow -->
</div><!-- /container -->
<script src="packageslider/js/classie.js"></script>
<script src="packageslider/js/tiltSlider.js"></script>
<script>
  new TiltSlider( document.getElementById( 'slideshow' ) );
</script>
<!-- For the demo ad only -->
<script src="http://tympanus.net/codrops/adpacks/demoad.js"></script>
    </div>
    <!-- ################################################################################################ -->
  </section>
</div>

<div class="wrapper row4 bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">

</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear">

  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.gobuttom.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>
