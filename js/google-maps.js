function initMap() {
  var burroughes = {lat: 43.647186, lng: -79.403346};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    maxZoom: 19,
    minZoom: 14,
    scrollwheel : false,
    mapTypeControl: false,
    center: burroughes
  });
  var marker = new google.maps.Marker({
    position: burroughes,
    map: map
  });
}
