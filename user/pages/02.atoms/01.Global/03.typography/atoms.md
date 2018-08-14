---
title: Typography
taxonomy:
    category:
        - patterns
        - atoms
twittercardoptions: summary
articleenabled: false
musiceventenabled: false
orgaenabled: false
orga:
    ratingValue: 2.5
orgaratingenabled: false
eventenabled: false
personenabled: false
restaurantenabled: false
restaurant:
    acceptsReservations: 'yes'
    priceRange: $
---

## Headings & titles

<h1 class="page-title">The quick brown fox jumps over the fence.</h1>
<h2 class="sub-title">This is a subtitle or just an h2 tag</h2>
<h3>h3 heading tag text goes here</h3>
<h4>h4 heading tag text goes here</h4>
<h5>h5 heading tag text goes here</h5>
<h6>h6 heading tag text goes here</h6>

```
<h1 class="page-title">The quick brown fox jumps over the fence.</h1>
<h2 class="sub-title">This is a subtitle or just an h2 tag</h2>
<h3></h3>
<h4></h4>
<h5></h5>
<h6></h6>
```
---

## Body copy

 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et lorem ligula. Duis tempus metus nec vestibulum congue. Suspendisse bibendum orci risus, non posuere quam gravida in. Nam quam purus, gravida vitae mollis ut, rutrum ac leo. Suspendisse massa odio, lobortis elementum dictum vitae, malesuada id neque. Etiam aliquam egestas leo sed tempus. Phasellus quis neque elementum, porttitor est et, finibus purus. Maecenas at libero nulla. Quisque elementum lectus vitae lectus dictum luctus. Sed quis commodo mi. Fusce viverra diam at nulla porta congue et eget augue. Maecenas tortor est, feugiat nec tincidunt a, fermentum a nisi.

```
<p>Vestibulum non rutrum ligula. Vestibulum fringilla tortor vitae tristique venenatis.
Sed ut velit vitae urna feugiat vulputate. Donec congue eu felis sed ultricies. Maecenas convallis
ante et mauris commodo vehicula. Sed turpis nulla, lobortis vitae eleifend id, dignissim vel ipsum.
Donec ac feugiat tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
```

---

## Fixed width

```
<script>
      function initMap() {
        var chicago = new google.maps.LatLng(41.850, -87.650);

        var map = new google.maps.Map(document.getElementById('map'), {
          center: chicago,
          zoom: 3
        });

        var coordInfoWindow = new google.maps.InfoWindow();
        coordInfoWindow.setContent(createInfoWindowContent(chicago, map.getZoom()));
        coordInfoWindow.setPosition(chicago);
        coordInfoWindow.open(map);

        map.addListener('zoom_changed', function() {
          coordInfoWindow.setContent(createInfoWindowContent(chicago, map.getZoom()));
          coordInfoWindow.open(map);
        });
      }

      var TILE_SIZE = 256;

      function createInfoWindowContent(latLng, zoom) {
        var scale = 1 << zoom;

        var worldCoordinate = project(latLng);

        var pixelCoordinate = new google.maps.Point(
            Math.floor(worldCoordinate.x * scale),
            Math.floor(worldCoordinate.y * scale));

        var tileCoordinate = new google.maps.Point(
            Math.floor(worldCoordinate.x * scale / TILE_SIZE),
            Math.floor(worldCoordinate.y * scale / TILE_SIZE));

        return [
          'Chicago, IL',
          'LatLng: ' + latLng,
          'Zoom level: ' + zoom,
          'World Coordinate: ' + worldCoordinate,
          'Pixel Coordinate: ' + pixelCoordinate,
          'Tile Coordinate: ' + tileCoordinate
        ].join('<br>');
      }

      // The mapping between latitude, longitude and pixels is defined by the web
      // mercator projection.
      function project(latLng) {
        var siny = Math.sin(latLng.lat() * Math.PI / 180);

        // Truncating to 0.9999 effectively limits latitude to 89.189. This is
        // about a third of a tile past the edge of the world tile.
        siny = Math.min(Math.max(siny, -0.9999), 0.9999);

        return new google.maps.Point(
            TILE_SIZE * (0.5 + latLng.lng() / 360),
            TILE_SIZE * (0.5 - Math.log((1 + siny) / (1 - siny)) / (4 * Math.PI)));
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
```
