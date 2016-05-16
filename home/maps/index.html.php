<?php

  require_once '../../templates/headerUsserXxx.php';
  require_once '../../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['subname']) && !isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['bday']) && !isset($_SESSION['sex']) && !isset($_SESSION['locality']) && !isset($_SESSION['typeFishing']) ){

    header("Location: ".$base_url);
    exit();

  }

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

    <?php

      if ( !empty($locations) ) {

        foreach ($locations as $local) {

          $place = "var myLatLng".$local['id']." = { lat: ".$local['latitud'].", lng:".$local['longitud']."}; \n  ";
          echo $place;

        }

      }

    ?>

    var mapDiv = document.getElementById('map');

    var map = new google.maps.Map(mapDiv, {

      center: {lat: 40.415363, lng: -3.707398},
      zoom: 6

    });



    <?php

      $contentString = "";

      foreach ($locations as $local) {

        $contentString .= "var contentString".$local['id'].
          " = \"<div id='content'><div id='siteNotice'></div><h1 id='firstHeading' class='firstHeading'>".
          $local['location']."</h1><div id='bodyContent'><p><b>".
          $local['created_at'].
          "</b>.</p></div></div>\";\n";

      }

      echo $contentString;

      $infoWindow = "\n\n";

      foreach ($locations as $local) {

        $infoWindow .= " var infowindow".$local['id'].
        " = new google.maps.InfoWindow({\ncontent: contentString".$local['id']."});";

      }

      echo $infoWindow;

      $markers = "\n\n";

      $icon = "'http://maps.google.com/mapfiles/ms/icons/red-dot.png'";

      foreach ($locations as $local) {

        $markers .= "var marker".$local['id'].
          " = new google.maps.Marker({\nposition: myLatLng".$local['id'].",\nicon: ".$icon.",\nmap: map,\ntitle: '".$local['location']."'});";

      }

      echo $markers;

      $markerListeners = "";

      foreach ($locations as $local) {

        $markerListeners .= "marker".$local['id'].".addListener('click', function() {
          infowindow".$local['id'].".open(map, marker".$local['id'].");\n});";
      }

      echo $markerListeners;

    ?>

  }

</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRurkRTeEvj6K2g3YgEECHGBu5r4-T0ls&signed_in=true&callback=initMap"></script>
</body>
</html>
