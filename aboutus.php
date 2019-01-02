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

<link type="text/css" rel="stylesheet" href="Css/logos.css"  media="screen,projection"/>

    <div id="firstRow" class="row" style="padding-top:10px;display:flex;">
      <div class="col s12 m12 l5"> <img src="images\FianetaImage-0994.jpg" width="100%" style="padding:10px" alt=""> </div>
      <div class="col s12 m12 l7  center-align valign-wrapper" >
        <div class="">
          <div class="">
            <h4>About Us</h4>
            <p>
              Company "Fianeta" was established in 1995 in Vilnius.
              In the beginning it was small sewing company with only few workers.
              From 1996 "Fianeta" is specializing in production of swimming wears.
              19 years of hard work, helped to be leading swimming wear production company in Baltic countries.
              High quality fabric and components, which are imported from Spain and Italy,
              and experienced designers and construction teams provide us an opportunity to have high-end swim wear production,
              that will meet the world fashion trends.
              For 19 years "Fianeta" have been supplying swim wears for more than 10 countries.
              Also company have more than 15 years of experience on Russian market.
              All our production is based in Europe that helps for fast response on fashion trends and also for fast order process.

              A wide range of colors and designs possibilities makes it possible to fit a swim wear to any woman.
              Our aim - make women irresistible!
            </p>
          </div>
        </div>
      </div>
      </div>
      <hr width="70%">
      <div class="row" id="secondRow" style="padding-top:10px;display:flex"  >
      <div class="col s12 m12 l4  center-align valign-wrapper">
        <div class="">
          <h4>Our Services</h4>
            <p>
              Fianeta provides full range of services for design and production of swimming wears of any difficulty.
              We are able to design a construction from your prototype, or we can use our database with 500 different designs of construction.
              Development is made using modern cad software "ClassicCad".
              Also we can provide help in development of unique print, printing and sewing prototypes for your swimming wear.
              We are accepting orders from 10 to 10000 pieces.
              Do not hesitate to contact us and we will turn your plans into reality!
            </p>
        </div>
      </div>
      <div class="col s12 m12 l8"><img src="images\FianetaImage-0673.jpg"style="padding:10px" width="100%"alt=""></div>
    </div>
    <hr width="70%">
    <h4 style="padding-bottom:2vw"class=" center-align">We were exposited at:</h4>
    <div  class="row logos" >
      <div class="col s6 m4 l3 center-align"><img src="images\icons\CPM.png" alt="" > </div>
      <div class="col s6 m4 l3 center-align"><img src="images\icons\lingeie_showForum.jpg" alt="" > </div>
      <div class="col s6 m4 l3 center-align"><img src="images\icons\salon_international.png" alt="" > </div>
      <div class="col s6 m4 l3 center-align"><img src="images\icons\CPM.png" alt="" > </div>
    </div>
    <br>
      <hr width="70%">

    <h4 style="padding-bottom:2vw" class=" center-align">Our Clients</h4>
    <div  class="row logos">
      <div class="col s6 m4 l3 center-align"><img src="images\icons\fianeta_logo.png" alt="" > </div>
      <div class="col s6 m4 l3 center-align"><img src="images\icons\Maxima_logo.png" alt="" > </div>
      <div class="col s6 m4 l3 center-align"><img src="images\icons\wildberries.png" alt="" > </div>
      <div class="col s6 m4 l3 center-align"><img src="images\icons\CPM.png" alt="" > </div>
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
           var firstRow = document.getElementById('firstRow');
           var secondRow = document.getElementById('secondRow');
           if (window.innerWidth<950)
           {
             firstRow.style.display = "block";
             secondRow.style.display = "block";
           }
           else
           {
             firstRow.style.display = "flex";
             secondRow.style.display = "flex";
           }
         }
     </script>
</html>
