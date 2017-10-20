<!DOCTYPE html>
<html>
<head>
<title>Pesaton | Pages | Sidebar Left</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demoheader.jpg');">
  <!-- ################################################################################################ -->
  <?php include('header.php'); ?>

  <div class="wrapper row2">
    <div id="breadcrumb" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Promotion</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first">
      <!-- ################################################################################################ -->
      <h6>Program</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="sidebar-left?page=package1">package1</a></li>
          <li><a href="sidebar-left?page=package2">package2 </a>
            <ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a></li>
            </ul>
          </li>
          <li><a href="#">Navigation - Level 1</a>
            <ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a>
                <ul>
                  <li><a href="#">Navigation - Level 3</a></li>
                  <li><a href="#">Navigation - Level 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Navigation - Level 1</a></li>
        </ul>
      </nav>
      <div class="sdb_holder">
        <h6>Lorem ipsum dolor</h6>
        <address>
        Full Name<br>
        Address Line 1<br>
        Address Line 2<br>
        Town/City<br>
        Postcode/Zip<br>
        <br>
        Tel: xxxx xxxx xxxxxx<br>
        Email: <a href="#">contact@domain.com</a>
        </address>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <div class="content three_quarter">
      <?php
      if (isset($_GET['page'])) {
        include("packages/".$_GET['page'].".php");
      }
      else{
	       include("packages/package1.php");
       }
       ?>
      <!-- ################################################################################################ -->


      </div>
      <div id="comments">

      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
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
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>
