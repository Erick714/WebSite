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

    <style media="screen">
      #GalleryMain
      {
        display:block;
        width:69%;
        margin-left: 10px;
        inline;
      }
      #GalleryMain img
      {
        max-height: 23vw;
        width: auto;

      }
        #GalleryMain a
        {
          width: 70%;
          margin-bottom: 10px;
          margin-top: 10px
        }

      #filter
      {
        visibility:visible;
        right:10px;
        display:block;
        width:26%;
        margin-right:  10px;
        position: fixed;
        height: 300px;
        background-color: blue;
        inline;
      }
      @media screen and (max-width: 992px)
      {
        #GalleryMain img
        {
          max-height: 30vw;
          width: auto;
        }
      }
      @media screen and (max-width: 600px)
      {
        #GalleryMain img
        {
          max-height: 60vw;
          width: auto;
        }
        #GalleryMain
        {
          display:block;
          width:100%;
          margin: 10px;
          inline;
        }
        #filter
        {
          visibility:hidden;
        }
      }
    </style>

<div id="GalleryMain" class="row left" >

    <div class="col s6 m4 l3  center-align ">
      <img id="Image1_1" class="materialboxed" src="Collection/2452 GOLUBOI.jpg" data-caption="2452">
      <a href="" class="waves-effect waves-light btn-small black"><i class="material-icons left">visibility</i>2452</a>
    </div>
    <div class="col s6 m4 l3  center-align ">
      <img id="Image1_2" class="materialboxed" src="Collection/2452 GOLUBOI.jpg" data-caption="2452">
      <a href="" class="waves-effect waves-light btn-small black"><i class="material-icons left">visibility</i>2452</a>
    </div>
    <div class="col s6 m4 l3  center-align ">
      <img id="Image1_3" class="materialboxed" src="Collection/2452 GOLUBOI.jpg" data-caption="2452">
      <a href="" class="waves-effect waves-light btn-small black"><i class="material-icons left">visibility</i>2452</a>
    </div>
    <div class="col s6 m4 l3  center-align ">
      <img id="Image1_4" class="materialboxed" src="Collection/2452 GOLUBOI.jpg" data-caption="2452">
      <a href="" class="waves-effect waves-light btn-small black"><i class="material-icons left">visibility</i>2452</a>
    </div>

    <div class="col s6 m4 l3  center-align ">
      <img id="Image1_5" class="materialboxed" src="Collection/2452 GOLUBOI.jpg" data-caption="2452">
      <a href="" class="waves-effect waves-light btn-small black"><i class="material-icons left">visibility</i>2452</a>
    </div>
    <div class="col s6 m4 l3  center-align ">
      <img id="Image1_6" class="materialboxed" src="Collection/2452 GOLUBOI.jpg" data-caption="2452">
      <a href="" class="waves-effect waves-light btn-small black"><i class="material-icons left">visibility</i>2452</a>
    </div>
    <div class="col s6 m4 l3  center-align ">
      <img id="Image1_7" class="materialboxed" src="Collection/2452 GOLUBOI.jpg" data-caption="2452">
      <a href="" class="waves-effect waves-light btn-small black"><i class="material-icons left">visibility</i>2452</a>
    </div>
    <div class="col s6 m4 l3  center-align ">
      <img id="Image1_8" class="materialboxed" src="Collection/2452 GOLUBOI.jpg" data-caption="2452">
      <a href="" class="waves-effect waves-light btn-small black"><i class="material-icons left">visibility</i>2452</a>
    </div>

    <div class="col s6 m4 l3  center-align ">
      <img id="Image1_9" class="materialboxed" src="Collection/2452 GOLUBOI.jpg" data-caption="2452">
      <a href="" class="waves-effect waves-light btn-small black"><i class="material-icons left">visibility</i>2452</a>
    </div>
    <div class="col s6 m4 l3  center-align ">
      <img id="Image1_10" class="materialboxed" src="Collection/2452 GOLUBOI.jpg" data-caption="2452">
      <a href="" class="waves-effect waves-light btn-small black"><i class="material-icons left">visibility</i>2452</a>
    </div>
    <div class="col s6 m4 l3  center-align ">
      <img id="Image1_11" class="materialboxed" src="Collection/2452 GOLUBOI.jpg" data-caption="2452">
      <a href="" class="waves-effect waves-light btn-small black"><i class="material-icons left">visibility</i>2452</a>
    </div>
    <div class="col s6 m4 l3  center-align ">
      <img id="Image1_12" class="materialboxed" src="Collection/2452 GOLUBOI.jpg" data-caption="2452">
      <a href="" class="waves-effect waves-light btn-small black"><i class="material-icons left">visibility</i>2452</a>
    </div>

    <div class="col s6 m4 l3  center-align ">
      <img id="Image1_13" class="materialboxed" src="Collection/2452 GOLUBOI.jpg" data-caption="2452">
      <a href="" class="waves-effect waves-light btn-small black"><i class="material-icons left">visibility</i>2452</a>
    </div>
    <div class="col s6 m4 l3  center-align ">
      <img id="Image1_14" class="materialboxed" src="Collection/2452 GOLUBOI.jpg" data-caption="2452">
      <a href="" class="waves-effect waves-light btn-small black"><i class="material-icons left">visibility</i>2452</a>
    </div>
    <div class="col s6 m4 l3  center-align ">
      <img id="Image1_15" class="materialboxed" src="Collection/2452 GOLUBOI.jpg" data-caption="2452">
      <a href="" class="waves-effect waves-light btn-small black"><i class="material-icons left">visibility</i>2452</a>
    </div>
    <div class="col s6 m4 l3  center-align ">
      <img id="Image1_16" class="materialboxed" src="Collection/2452 GOLUBOI.jpg" data-caption="2452">
      <a href="" class="waves-effect waves-light btn-small black"><i class="material-icons left">visibility</i>2452</a>
    </div>

</div>
<div id= "filter" class="right" >


<a onclick="" class=" waves-effect waves-light btn-small black" style="text-align: center;bottom; width:100%"><i class="material-icons left">search</i>Filter</a>
</div>


  </body>
     <script type="text/javascript" src="JS/materialize.min.js"></script>
     <script type="text/javascript">
       function initialize()
         {
           SetNavElement();
         }
         document.addEventListener('DOMContentLoaded', function()
         {
            var elems = document.querySelectorAll('.materialboxed');
            var instances = M.Materialbox.init(elems);
          });


     </script>
</html>
