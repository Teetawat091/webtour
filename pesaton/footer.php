<footer id="footer" class="hoc clear">
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="group">
    <div class="one_third first">
      <h6 class="title">Position</h6>
      <div id="map" style="width:100%;height:300px;"></div>
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
      <h6 class="title">Contact &nbsp; Us</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          4/27 PATAK ROAD, SOI 24 KARON SUP DISTRICT, &amp; MUANG DISTRICT, PHUKET THAILAND, 83000
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +66 (087) 158 9165 <br> <i></i> +66 (094) 594 6626</li>
        <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> PHUKETTRIPINFO@GAMIL.COM</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Etiam convallis ante</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Pharetra facilisis</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
            <p class="nospace">Condimentum fusce justo ligula malesuada ut finibus at dictum sem nulla&hellip;</p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Dapibus eros</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-05">Thirsday, 5<sup>th</sup> April 2045</time>
            <p class="nospace">Lacinia sem vitae lorem etiam aliquet magna vitae cursus ultrices sed enim&hellip;</p>
          </article>
        </li>
      </ul>
    </div>
  </div>
  <!-- ################################################################################################ -->
</footer>
