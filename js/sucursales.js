function sucursales(lat, lon, tlat, tlon) {


    console.log(lat, lon, tlat, tlon)

    var map = L.map('map').setView([lat, lon], 16);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([lat, lon]).addTo(map)
        .bindPopup('SU UBICACION ACTUAL')
        .openPopup();

    L.marker([tlat, tlon]).addTo(map)
        .bindPopup('UBICACION DE LA <br> TIENDA')
        .openPopup();

    L.Routing.control({
        waypoints: [
            L.latLng(lat, lon),
            L.latLng(tlat, tlon)
        ],
        routeWhileDragging: true
    }).addTo(map);
}