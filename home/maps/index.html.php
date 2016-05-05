<?php

  require_once '../../templates/headerUsserXxx.php';

?>
<style>

      .panel {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #map {
        height: 100%;
      }

</style>

<div class="container">

  <div class="col-lg-8 col-md-offset-2">
    <div class="panel panel-default">

      <div class="panel-heading text-center ">

        <div class="panel-body" id="map">

          <script>

            function initMap () {

              var myLatLng = {lat: 37.4105634, lng: -5.9251314};

              <?php

              if ( !empty($locations) ) {

                foreach ($locations as $local) {

                  $place = "var myLatLng".$local['id']." = { lat: ".$local['latitud'].", lng:".$local['longitud']."}; \n  ";
                  echo $place;
                }

              }

              ?>
              var myLatLngADA = {lat: 37.4078108, lng: -5.9282535};
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 5,
                center: myLatLng
              });

              <?php

              // $contentString = "";
              //
              // foreach ($locations as $local) {
              //
              //   $contentString .= "var contentString".$local['id']." = \"<div id='content'><div id='siteNotice'></div><h1 id='firstHeading' class='firstHeading'>".$local['location']."</h1><div id='bodyContent'></div></div>;"."\n";
              //
              // }
              //
              // echo $contentString;

              // $infoWindow = "\n\n";
              //
              // foreach ($locations as $local) {
              //
              //   $infoWindow .= " var infowindow".$local['id']." = new google.maps.InfoWindow({\ncontent: contentString".$local['id']."});";
              //
              // }
              //
              // echo $infoWindow;
              //
              // foreach ($locations as $local) {
              //
              //   $markerListeners .= "marker".$local['id'].".addListener('click', function() {
              //     infowindow".$local['id'].".open(map, marker".$local['id'].");\n});";
              //
              // }
              //
              // echo $markerListeners;

            ?>

            }

          </script>

      </div>

    </div>

  </div>

</div>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRurkRTeEvj6K2g3YgEECHGBu5r4-T0ls&signed_in=true&callback=initMap"></script>
</body>
</html>
