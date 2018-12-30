var centerMap = SMap.Coords.fromWGS84(15.33, 49.74);
var m = new SMap(JAK.gel("m"), centerMap, 9);
var l = m.addDefaultLayer(SMap.DEF_BASE).enable();
m.addDefaultControls();                    

var layer = new SMap.Layer.Marker();
var clusterer = new SMap.Marker.Clusterer(m);
layer.setClusterer(clusterer);
var markers = [];

var txtFile = new XMLHttpRequest();
txtFile.open("GET", "https://kkns.eu/schranky/coords", true);
txtFile.onreadystatechange = function() {
  if (txtFile.readyState === 4) {
    if (txtFile.status === 200) {
      allText = txtFile.responseText; 
      lines = txtFile.responseText.split("\n");
      lines.forEach(function(line) {
        xy = line.split(/\s+/);
        var coords = SMap.Coords.fromJTSK(xy[0], xy[1]);
        var marker = new SMap.Marker(coords, null, {url: "https://api.mapy.cz/img/api/marker/drop-yellow.png"});
        markers.push(marker);                
      });
      layer.addMarker(markers);
      m.addLayer(layer).enable();
    }
  }
}


txtFile.send(null);