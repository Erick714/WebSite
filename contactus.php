<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0"/>
    <title>Fianeta</title>
     <link type="text/css" rel="stylesheet" href="Css/materialize.min.css"  media="screen,projection"/>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body onload="initialize()">

    <?php include "Templates/NavBars/navbar-en.html"; ?>
  <hr width="70%">

<div id="contactRow" class="row"   style="display:flex; height:500px">
<div class="col s12 m6 l6 " height="100%">

  <div class="center-align" style="height:100% ;  padding:10px">
    <img id="image" class="center-align" style="width:100%" style="padding:10px"src="images/FianetaImage-0600.jpg" alt="">
    <div class="">
        <div class="row">
          <div class="col s12 m12 l6 center-align valign-wrapper" style="padding:10px">
            <i class="medium material-icons">phone</i>
            <h5 style="padding:10px;width:100%">868686868</h5>
          </div>
          <div class="col s12 m12 l6 center-align valign-wrapper" style="padding:10px">
            <i class="medium material-icons">email</i>
             <h5 style="padding:10px;width:100%">info@fianeta.lt</h5>
          </div>
          <div class="col s12 m12 l6 center-align valign-wrapper" style="padding:10px">
            <i class="medium material-icons">place</i>
            <h5 style="padding:10px;width:100%">P.Vileišio 18-267, Vilnius 10306, Lietuva</h5>
          </div>
          <div class="col s12 m12 l6 center-align valign-wrapper" style="padding:10px">
            <i class="medium material-icons">phone</i>
             <h5 style="padding:10px; width:100%">5465464654</h5>
          </div>
        </div>
  </div>
  </div>

</div>
<div class="col s12 m6 l6 center-align" >

    <div id="map"  style="width:100%;height:100%; padding:10px"></div></div>


</div>



  </body>
     <script type="text/javascript" src="JS/materialize.min.js"></script>
     <script type="text/javascript">
     function initialize()
       {
         SetNavElement();
         flexRemover();
       }
       window.addEventListener("resize", flexRemover);
       function flexRemover()
       {
         var logo = document.getElementById('Logo');
         var contactRow = document.getElementById('contactRow');


         console.log(contactRow.style.height);
         if (window.innerWidth<600)
         {
           contactRow.style.display = "block";
           var image = document.getElementById('image');
           var mapa = document.getElementById('map');
           image.style.width = "100%"
           mapa.style.width = "100%"
           contactRow.style.height = "500px"
         }
         else
         {
           contactRow.style.height = (window.innerHeight - window.innerWidth/10)+'px';
           if (window.innerWidth>1300)
           {
             var image = document.getElementById('image');
             var mapa = document.getElementById('map');
             image.style.width = "90%"
             mapa.style.width = "90%"

           }
           contactRow.style.display = "flex";
         }
       }
    var map;
    function initMap()
    {
           // Create the map with no initial style specified.
           // It therefore has default styling.
           map = new google.maps.Map(document.getElementById('map'), {
             center: {lat: 54.7028125, lng: 25.307812499999955},
             zoom: 16,
             mapTypeControl: false
           });

           var marker = new google.maps.Marker({
            position: {lat: 54.7028125, lng: 25.307812499999955},
            map: map,
            title: 'Fianeta' });
           // Set the map's style to the initial value of the selector.
           map.setOptions({styles: styles["silver"]});


         }

         var styles = {
           default: null,
           silver: [
             {
               elementType: 'geometry',
               stylers: [{color: '#f5f5f5'}]
             },
             {
               elementType: 'labels.icon',
               stylers: [{visibility: 'off'}]
             },
             {
               elementType: 'labels.text.fill',
               stylers: [{color: '#616161'}]
             },
             {
               elementType: 'labels.text.stroke',
               stylers: [{color: '#f5f5f5'}]
             },
             {
               featureType: 'administrative.land_parcel',
               elementType: 'labels.text.fill',
               stylers: [{color: '#bdbdbd'}]
             },
             {
               featureType: 'poi',
               elementType: 'geometry',
               stylers: [{color: '#eeeeee'}]
             },
             {
               featureType: 'poi',
               elementType: 'labels.text.fill',
               stylers: [{color: '#757575'}]
             },
             {
               featureType: 'poi.park',
               elementType: 'geometry',
               stylers: [{color: '#e5e5e5'}]
             },
             {
               featureType: 'poi.park',
               elementType: 'labels.text.fill',
               stylers: [{color: '#9e9e9e'}]
             },
             {
               featureType: 'road',
               elementType: 'geometry',
               stylers: [{color: '#ffffff'}]
             },
             {
               featureType: 'road.arterial',
               elementType: 'labels.text.fill',
               stylers: [{color: '#757575'}]
             },
             {
               featureType: 'road.highway',
               elementType: 'geometry',
               stylers: [{color: '#dadada'}]
             },
             {
               featureType: 'road.highway',
               elementType: 'labels.text.fill',
               stylers: [{color: '#616161'}]
             },
             {
               featureType: 'road.local',
               elementType: 'labels.text.fill',
               stylers: [{color: '#9e9e9e'}]
             },
             {
               featureType: 'transit.line',
               elementType: 'geometry',
               stylers: [{color: '#e5e5e5'}]
             },
             {
               featureType: 'transit.station',
               elementType: 'geometry',
               stylers: [{color: '#eeeeee'}]
             },
             {
               featureType: 'water',
               elementType: 'geometry',
               stylers: [{color: '#c9c9c9'}]
             },
             {
               featureType: 'water',
               elementType: 'labels.text.fill',
               stylers: [{color: '#9e9e9e'}]
             }
           ]};

     </script>
     <script async defer
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1HiT3mG8IHJg0KlFT-3ukV9OhU3GXzW0&callback=initMap">
     </script>
</html>
