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

      if ( !empty($fishes) ) {

        foreach ($fishes as $fish) {

          $place = "var myLatLng".$fish['id']." = { lat: ".$fish['latitud'].", lng:".$fish['longitud']."}; \n  ";
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

      foreach ($fishes as $fish) {

        $contentString .= "var contentString".$fish['id'].
          " = \"<div id='content'><div id='siteNotice'></div><h1 id='firstHeading' class='firstHeading'>".
          $fish['fish']."</h1><div id='bodyContent'><p><b>".
          $fish['created_at'].
          "</b>.</p></div></div>\";\n";

      }

      echo $contentString;

      $infoWindow = "\n\n";

      foreach ($fishes as $fish) {

        $infoWindow .= " var infowindow".$fish['id'].
        " = new google.maps.InfoWindow({\ncontent: contentString".$fish['id']."});";

      }

      echo $infoWindow;

      $markers = "\n\n";

      $icon = "'http://maps.google.com/mapfiles/ms/icons/blue-dot.png'";

      foreach ($fishes as $fish) {

        $markers .= "var marker".$fish['id'].
          " = new google.maps.Marker({\nposition: myLatLng".$fish['id'].",\nicon: ".$icon.",\nmap: map,\ntitle: '".$fish['fish']."'});";

      }

      echo $markers;

      $markerListeners = "";

      foreach ($fishes as $fish) {

        $markerListeners .= "marker".$fish['id'].".addListener('click', function() {
          infowindow".$fish['id'].".open(map, marker".$fish['id'].");\n});";
      }

      echo $markerListeners;

    ?>

  }

</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRurkRTeEvj6K2g3YgEECHGBu5r4-T0ls&signed_in=true&callback=initMap"></script>
</body>
</html>
