<!DOCTYPE html>
<html>
<head>
  <title> Contact </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>
  <div class="bgded overlay" style="background-image:url('images/demoheader.jpg');">
  <?php include('header.php');?>
    <div class="wrapper row2">
      <div id="breadcrumb" class="hoc clear">
          <li><a href="#">Home</a></li>
          <li><a href="#">Contact</a></li>
    </div>
  </div>
</div>
  <div class="wrapper row4 bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
  <footer id="footer" class="hoc clear">

      <div class="one_third first">
        <h6 class="title">Position</h6>
        <div id="map" style="width:100%;height:400px;"></div>
        <script>
        function myMap() {
          var myCenter = new google.maps.LatLng(7.8560563,98.2942684,16.75);
          var mapCanvas = document.getElementById("map");
          var mapOptions = {center: myCenter, zoom: 15};
          var map = new google.maps.Map(mapCanvas, mapOptions);
          var marker = new google.maps.Marker({position:myCenter});
          marker.setAnimation(google.maps.Animation.BOUNCE);
          marker.setMap(map);
        }
      </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0XL5SyoJxE0_jv1h-m-Se_owykLrmVT8&callback=myMap"></script>
      </div>
      <div class="one_third">
        <h6 class="title">Semdmail</h6>
        <form action="#" method="post">
          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required>
          </div>
          <br><br><br>
          <div class="one_third">
            <label for="email">Mail <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
          </div>
          <br>
          <div>
            <input type="submit" name="submit" value="Submit Form">
            &nbsp;
          </div>
        </form>
      </div>
      <div class="one_third">
        <h6 class="title">Contact &nbsp; Us</h6>
        <ul class="nospace linklist contact">
          <li><i class="fa fa-map-marker"></i>
            <address>
            4/27 PATAK ROAD, SOI 24 KARON SUP DISTRICT, &amp; MUANG DISTRICT, PHUKET THAILAND, 83000
            </address>
          </li>
          <li><i class="fa fa-phone"></i> +66 (087) 158 9165 <br> <i></i> +66 (094) 594 6626</li>
          <li><i class="fa fa-fax"></i>------------------------</li>
          <li><i class="fa fa-envelope-o"></i> PHUKETTRIPINFO@GAMIL.COM</li>
        </ul>

      </div>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
</body>
</html>
