<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    
<!--   <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
    <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
   
    
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.css" />
    <script src="http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.js"></script>
     esto es un enlace del servidor
-->    
    
    <link rel="stylesheet" href="leaflet.css" />
    <script src="leaflet.js"></script>
 <script src="leaflet.markercluster.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 
    <!-- esto es de manera local -->
   

   <link href="css/bootstrap.css"  rel="stylesheet">
   <link href="css/bootstrap.min.css"  rel="stylesheet">
   
   
   <style>
       #map {widh: 800px;height: 800px;}
   </style>                                
    
    
    </head>
    <body>
        <div id="map" ></div>
	<script src="distritos3.js" type="text/javascript"></script>
	<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
	<script>
		//var map = L.map('map').setView([28.68, -17.85], 10);
                var map = L.map('map').setView([ 28.61,-17.88], 10);
                
                //http://openstreetmap.org
	
		L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
		   maxZoom: 18,
		   attribution: 'Map data © <a href="https://api.tiles.mapbox.com/">OpenStreetMap</a> contributors, '+
		   '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, '+
		   'Imagery © <a href="http://cloudmade.com">CloudMade</a>',
		   id: 'mapbox.light'
		}).addTo(map);
 
//		function onEachFeature(feature, layer) {	
//		  if (feature.properties && feature.properties.distritos) {
//		     var popupContent = "<p>Volcanes: " + feature.properties.uvs + "</p>";
//		     layer.bindPopup(popupContent);
//		  };			


		function style(feature) {
		   return {
		     weight: 2,
		     opacity: 1,
		     color: 'blue',
		     dashArray: '3',
		     fillOpacity: 0.7,
		  //   fillColor: '#FEB24C',
                     fillColor:'black'
		   };
		};
//				
//                function style(feature) {
//		    var fillColor,
//                 density = feature.properties.POP_EST;
//                  if (density > 80) fillColor = "#006837";
//                  else if (density > 40) fillColor = "#31a354";
//                  else if (density > 20) fillColor = "#78c679";
//                  else if (density > 10) fillColor = "#c2e699";
//                  else if (density > 0) fillColor = "#ffffcc";
//                  else fillColor = "#f7f7f7";  // no data
//                  return { color: "#999", weight: 1, fillColor: fillColor, fillOpacity: .6 
//                      
//                  }};
		                
                                
                                
                                
                                
               
//                 $.getJSON("distritos.js", function (hoodData) {
//          L.geoJson(hoodData, {
//              style: function (feature) {
//                  var fillColor,
//            density = feature.properties.density;
//                  if (density > 80) fillColor = "#006837";
//                  else if (density > 40) fillColor = "#31a354";
//                  else if (density > 20) fillColor = "#78c679";
//                  else if (density > 10) fillColor = "#c2e699";
//                  else if (density > 0) fillColor = "#ffffcc";
//                  else fillColor = "#f7f7f7";  // no data
//                  return { color: "#999", weight: 1, fillColor: fillColor, fillOpacity: .6 };
//              },
//              onEachFeature: function (feature, layer) {
//                  layer.bindPopup("<strong>" + feature.properties.Name + "</strong><br/>" + feature.properties.density + " ratas por milla cuadrada")
//              }
//          }).addTo(map);
//      });                 
                                
                                
                                
                                
		L.geoJson(municipios, {
		   style: style,
		 //  onEachFeature: onEachFeature
		}).addTo(map);
 
	</script>
        
<!--        
  <div class="btn-group dropup">
  <button type="button" class="btn btn-default">
  Botón dropup</button>
 
  <button type="button" class="btn btn-default dropdown-toggle"
          data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Desplegar menú</span>
  </button>
 
  <ul class="dropdown-menu">
 <li><a href="index.php">Informacion geografica de Volcanes</a></li>
    <li><a href="#">Informacion geografica de ubicaciones de gasolinerias</a></li>
    <li><a href="#">Informacion geografica de Imnundaciones</a></li>
     
  </ul>
 
  </div>    
      
      <div>
  <button type="button" class="btn btn-default">
  Botón dropup a la derecha</button>
 
 
  <ul class="dropdown-menu pull-right">
    <li><a href="index.php">Informacion geografica de Volcanes</a></li>
    <li><a href="#">Informacion geografica de ubicaciones de gasolinerias</a></li>
    <li><a href="#">Informacion geografica de Imnundaciones</a></li>
     
  </ul>
</div>
        <div class="btn-group">
  <button type="button" class="btn btn-danger">Título del botón</button>
 
  <button type="button" class="btn btn-danger dropdown-toggle"
          data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Desplegar menú</span>
  </button>
 
  <ul class="dropdown-menu" role="menu">
    <li><a href="index.php">Informacion</a></li>
    <li><a href="#">Acción #2</a></li>
    <li><a href="#">Acción #3</a></li>
    <li class="divider"></li>
    <li><a href="#">Acción #4</a></li>
  </ul>
</div>-->
        
        <?php
        // put your code here
        ?>
    </body>
</html>

