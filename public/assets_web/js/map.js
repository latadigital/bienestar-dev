var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: -33.4257969, lng: -70.61888809999999 },
        zoom: 15
    });
}