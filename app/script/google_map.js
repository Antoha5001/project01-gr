var map,
    mapLat = {lat: 53.33878122, lng: 83.74514609},
    myTitle = "ООО \«Типография Графика\»";

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: mapLat,
        zoom: 17,
        maxZoom: 20,
        minZoom: 10,
        scrollwheel: false
    });
    var marker = new google.maps.Marker({
        position: mapLat,
        map: map,
        title: myTitle,
        animation: google.maps.Animation.DROP
    });
}
