{{-- <div id='map' style='width: 400px; height: 300px;'></div>
<script>
    mapboxgl.accessToken =
        'pk.eyJ1IjoiYXZpaml0ZWNoIiwiYSI6ImNsazd6NnViNDA1aXczcW1ndnFsenhpcDAifQ.F9ZE0BnXJyaGyScRB3vxgQ';
    const map = new mapboxgl.Map({
        container: 'map', // container ID
        style: 'mapbox://styles/mapbox/streets-v12', // style URL
        center: [-74.5, 40], // starting position [lng, lat]
        zoom: 9, // starting zoom
    });
</script> --}}

<div id="map"></div>
<script>
    mapboxgl.accessToken =
        'pk.eyJ1IjoiYXZpaml0ZWNoIiwiYSI6ImNsazd6NnViNDA1aXczcW1ndnFsenhpcDAifQ.F9ZE0BnXJyaGyScRB3vxgQ';
    const map = new mapboxgl.Map({
        container: 'map',
        // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
        style: 'mapbox://styles/mapbox/light-v11',
        center: [22.3387, 89.8362],
        zoom: 5.5,
        pitch: 45
    });

    function rotateCamera(timestamp) {
        // clamp the rotation between 0 -360 degrees
        // Divide timestamp by 100 to slow rotation to ~10 degrees / sec
        map.rotateTo((timestamp / 100) % 360, {
            duration: 0
        });
        // Request the next frame of the animation.
        requestAnimationFrame(rotateCamera);
    }

    map.on('load', () => {
        // Start the animation.
        rotateCamera(0);

        // Add 3D buildings and remove label layers to enhance the map
        const layers = map.getStyle().layers;
        for (const layer of layers) {
            if (layer.type === 'symbol' && layer.layout['text-field']) {
                // remove text labels
                //map.removeLayer(layer.id);
            }
        }

        map.addLayer({
            'id': '3d-buildings',
            'source': 'composite',
            'source-layer': 'building',
            'filter': ['==', 'extrude', 'true'],
            'type': 'fill-extrusion',
            'minzoom': 15,
            'paint': {
                'fill-extrusion-color': '#aaa',

                // use an 'interpolate' expression to add a smooth transition effect to the
                // buildings as the user zooms in
                'fill-extrusion-height': [
                    'interpolate',
                    ['linear'],
                    ['zoom'],
                    15,
                    0,
                    15.05,
                    ['get', 'height']
                ],
                'fill-extrusion-base': [
                    'interpolate',
                    ['linear'],
                    ['zoom'],
                    15,
                    0,
                    15.05,
                    ['get', 'min_height']
                ],
                'fill-extrusion-opacity': 0.6
            }
        });
    });
</script>
