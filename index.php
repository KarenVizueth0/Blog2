<!DOCTYPE html>
<html>
  <head>
    <title>Museo</title>

    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/templatemo_style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/templatemo_misc.css">

    <link rel="stylesheet" href="css/nivo-slider.css">
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/JavaScript" src="js/slimbox2.js"></script> 

    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/ddsmoothmenu.js"></script>

<script type="text/javascript">

ddsmoothmenu.init({
  mainmenuid: "templatemo_flicker", 
  orientation: 'h', 
  classname: 'ddsmoothmenu', 
  contentsource: "markup"
})



</script>

  </head>
  <body>




    <header>
    <!-- start menu -->
    <div class="menu">
      <div class="contenedor">
    <div id="templatemo_home">
      <div class="templatemo_top">
      <div class="container templatemo_container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div class="logo"> </div>
          </div>
          <div class="col-sm-9 col-md-9 templatemo_col9">
            <div id="top-menu">
            <nav class="mainMenu">
              <ul class="nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="videos.html">Menú</a></li>
                <li><a href="videos.html">Galeria</a></li>
                <li><a href="res.php">Reservación</a></li>
                <li><a href="contacto.php">Contacto</a></li>
              </ul>
            </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

  




    <div class="clear"></div>
    <!-- end menu -->
        <div  id="slider"  class="nivoSlider templatemo_slider">
          <a href="#"><img src="images/slider/img3.jpg" alt="slide 1" /></a>            
      <a href="#"><img src="images/slider/img2.jpg" alt="slide 2" /></a>  
            <a href="#"><img src="images/slider/img1.jpg" alt="slide 3" /></a>            
  
      </div>
</header>


             <a href="inicio.php?salir=1" class="btn btn-large btn-primary"><font color="white">Cerrar Sesión</font></a>

    </div>
    <!--Our Portfolio End-->
    <div class="clear"></div>
    <!--Our Blog Start-->
    <div class="templatemo_blog" id="templatemo_blog">
      <div class="clear"></div>
</div>

    
    <!-- Sirve para traer las libreria de javascript -->

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cycle2.min.js"></script>
    <script src="js/jquery.cycle2.carousel.min.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>
    <script type="text/javascript">
      $(function(){
          var default_view = 'grid';
          if($.cookie('view') !== 'undefined'){
              $.cookie('view', default_view, { expires: 7, path: '/' });
          } 
          function get_grid(){
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox-list');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }

          } 
//sirve para el tiempo del slider
          if($.cookie('view') == 'grid'){ 
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0});
                  $('.prod-cnt').removeClass('dboxlist');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
          }

          $('#list').click(function(){   
              $.cookie('view', 'list'); 
              get_list()
          });

          $('#grid').click(function(){ 
              $.cookie('view', 'grid'); 
              get_grid();
          });

 
    </script>
  <script src="js/jquery.singlePageNav.js"></script>
  
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
          prevText: '',
          nextText: '',
          controlNav: false,
        });
    });
    </script>
  
    
      
</body>
      </html>