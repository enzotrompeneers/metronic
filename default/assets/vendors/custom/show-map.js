function initMap() {
    torrevieja = {lat: 37.97872, lng: -0.68222};
    map = new google.maps.Map(document.getElementById('mymap'), {
        zoom: 14,
        center: torrevieja
    });


    marker = new google.maps.Marker({
        position: torrevieja,
        map: map
    });

    //Bind click handlers - Here's the important part
    $('a[href=\\#mapa]').on('click', function() {


        setTimeout(function(){
            x = map.getZoom();
            c = map.getCenter();
            google.maps.event.trigger(map, 'resize');
            map.setZoom(x);
            map.setCenter(c);
        }, 50);
    });    

    // Create the search box and link it to the UI element.
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
   

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
    });

    var markers = [];
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
        return;
    }

    // Clear out the old markers.
    markers.forEach(function(marker) {
        marker.setMap(null);
    });
    markers = [];

    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();

    places.forEach(function(place) {
        if (!place.geometry) {
        console.log("Returned place contains no geometry");
        return;
        }
        var icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
        };

        // Create a marker for each place.
        markers.push(new google.maps.Marker({
        map: map,
        icon: icon,
        title: place.name,
        position: place.geometry.location
        
        }));

        if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
        } else {
        bounds.extend(place.geometry.location);
        }
    });
    map.fitBounds(bounds);
    });
}