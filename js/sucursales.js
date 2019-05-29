function sucursales(lat, lon, tlat, tlon) {

    console.log(lat, lon, tlat, tlon)
    
    

    var waypts = [{ location: { lat: lat, lng: lon }, stopover: true }, { location: { lat: tlat, lng: tlon }, stopover: true }];
    console.log(waypts[1].location.lat)




    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 6,
        center: { lat: waypts[0].location.lat, lng: waypts[0].location.lng }
    });
    directionsDisplay.setMap(map);
    directionsService.route({
        origin: { lat: waypts[0].location.lat, lng: waypts[0].location.lng },
        destination: { lat: waypts[1].location.lat, lng: waypts[1].location.lng },
        waypoints: waypts,
        travelMode: google.maps.TravelMode.WALKING
    }, function (response, status) {
        if (status === 'OK') {
            directionsDisplay.setDirections(response);
        } else {
            window.alert('Directions request failed due to ' + status);
        }
    });
}