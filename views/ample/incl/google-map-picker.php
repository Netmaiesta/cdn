<!--map div-->
<div class="row hidden">
  <div class="col-sm-6">
    <div class="form-group">
      <label class="col-md-12 text-muted">Lat </label>
      <div class="col-md-12">
        <input value="{{NetmaiestaClass::editIValue('o-lat')}}" id="lat" readonly type="text" name="o-lat" class="form-control form-control-line text-muted" value="6.992695131208827">
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
      <label class="col-md-12 text-muted">Lan </label>
      <div class="col-md-12">
        <input value="{{NetmaiestaClass::editIValue('o-lng')}}" id="lng" readonly type="text" name="o-lng" class="form-control form-control-line text-muted" value="79.94347304105759">
      </div>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-12 hidden">In order to change the address in map, double click the map and drag the marker</label>
  <p class="col-sm-12">Mark your business location <br> In order to change the address in map, double click the map and drag the marker</p>
  <div class="col-sm-12">
    <div style="width:100%;height:500px" id="map"></div>
  </div>
</div>
<script async defer type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyAa7HO-M0YGFcSDcnPkFOGy-im92f5UZJI&callback=initMap"></script>
<script type="text/javascript">
  var map; //Will contain map object.
  var marker = false; ////Has the user plotted their location marker?
  var markerC;
  function initMap() {
      var centerOfMap = new google.maps.LatLng({{NetmaiestaClass::editIValue('o-lat', '6.992695131208827')}}, {{NetmaiestaClass::editIValue('o-lng', '79.94347304105759')}});
      var options = {
        center: centerOfMap, //Set center.
        zoom: 9 //The zoom value.
      };
      map = new google.maps.Map(document.getElementById('map'), options);
      var oldMarker = new google.maps.LatLng({{NetmaiestaClass::editIValue('o-lat', '6.992695131208827')}}, {{NetmaiestaClass::editIValue('o-lng', '79.94347304105759')}});
      markerC = new google.maps.Marker({
          position: oldMarker,
          map: map,
      });
      google.maps.event.addListener(map, 'click', function(event) {
        markerC.setMap(null);
          var clickedLocation = event.latLng;
          if(marker === false){
              marker = new google.maps.Marker({
                  position: clickedLocation,
                  map: map,
                  draggable: true //make it draggable
              });
              google.maps.event.addListener(marker, 'dragend', function(event){
                  markerLocation();
              });
          } else{
              marker.setPosition(clickedLocation);
          }
          markerLocation();
      });
  }
  function markerLocation(){
      var currentLocation = marker.getPosition();
      document.getElementById('lat').value = currentLocation.lat(); //latitude
      document.getElementById('lng').value = currentLocation.lng(); //longitude
  }
  google.maps.event.addDomListener(window, 'load', initMap);

</script>
<!-- /map div-->
