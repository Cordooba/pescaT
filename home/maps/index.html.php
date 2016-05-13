<?php

  require_once '../../templates/headerUsserXxx.php';

?>
<style>

      #map {
        height: 550px;
        width: 750px;
      }

</style>

<div class="container">

  <div class="col-lg-8 col-md-offset-2">

    <div class="panel panel-default">

      <div id="map"></div>

    </div>

  </div>

<script>

  function initMap() {

    var mapDiv = document.getElementById('map');
    var map = new google.maps.Map(mapDiv, {
      center: {lat: 40.415363, lng: -3.707398},
      zoom: 6
    });

  }

</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRurkRTeEvj6K2g3YgEECHGBu5r4-T0ls&signed_in=true&callback=initMap"></script>
</body>
</html>
