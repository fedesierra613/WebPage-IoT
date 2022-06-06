<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FSM Solutions</title>
    <link rel="icon" type="image/png" href="logo.jpg">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
    }
    h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
    }
    h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
    }  
    .jumbotron {
      background-image: url("https://zarzaygomez.com.co/wp-content/uploads/2020/03/ban2.jpg");
      background-color: transparent;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
    }
    .container-fluid {
      padding: 60px 50px;
    }
    .bg-grey {
      background-color: #f6f6f6;
    }
    .logo-small {
      color: #6b6a69;
      font-size: 50px;
    }
    .logo {
      color: #6b6a69;
      font-size: 200px;
    }
    .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
    }
    .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
    }
    .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #6b6a69;
    }
    .carousel-indicators li {
      border-color: #6b6a69;
    }
    .carousel-indicators li.active {
      background-color: #6b6a69;
    }
    .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
    }
    .item span {
      font-style: normal;
    }
    .panel {
      border: 1px solid #6b6a69; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
    }
    .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
    }
    .panel-footer .btn:hover {
      border: 1px solid #6b6a69;
      background-color: #fff !important;
      color: #6b6a69;
    }
    .panel-heading {
      color: #fff !important;
      background-color: #6b6a69 !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
    }
    .panel-footer {
      background-color: white !important;
    }
    .panel-footer h3 {
      font-size: 32px;
    }
    .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
    }
    .panel-footer .btn {
      margin: 15px 0;
      background-color: #6b6a69;
      color: #fff;
    }
    .navbar {
      margin-bottom: 0;
      background-color: #6b6a69;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
    }
    .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
    }
    .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #6b6a69 !important;
      background-color: #fff !important;
    }
    .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
    }
    footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #6b6a69;
    }
    .slideanim {visibility:hidden;}
    .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
    }
    @keyframes slide {
      0% {
        opacity: 0;
        transform: translateY(70%);
      } 
      100% {
        opacity: 1;
        transform: translateY(0%);
      }
    }
    @-webkit-keyframes slide {
      0% {
        opacity: 0;
        -webkit-transform: translateY(70%);
      } 
      100% {
        opacity: 1;
        -webkit-transform: translateY(0%);
      }
    }
    @media screen and (max-width: 768px) {
      .col-sm-4 {
        text-align: center;
        margin: 25px 0;
      }
      .btn-lg {
        width: 100%;
        margin-bottom: 35px;
      }
    }
    @media screen and (max-width: 480px) {
      .logo {
        font-size: 150px;
      }
    }

    .custimizeForm {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }


    </style>
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#myPage">
            <img src="logo.jpg" width="85" height="40" alt="Haz click aquí para volver a la página de inicio">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about">ACERCA DE</a></li>
          <li><a href="#services">SERVICIOS</a></li>
          <li><a href="#portfolio">PORTFOLIO</a></li>
          <li><a href="#pricing">PLANES</a></li>
          <li><a href="#contact">CONTACTO</a></li>
          <li><a href="login.php">LOGIN</a></li>
          <li><a href="signup.php">SIGNUP</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <br><br>
  
  <div class="jumbotron text-center">
    <h1>FSM Solutions</h1> 
    <p>Especialistas en soluciones de IoT</p> 
  </div>
  
  <!-- Container (About Section) -->
  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h2>QUIENES SOMOS</h2><br>
        <h4>Somos una empresa lider en el diseño e implementación de sistemas IoT para la monitorización y control de 
            edificios, ayudando a la conservación de edificaciones y monumentos que por su localización, 
            antiguedad, cantidad de visitantes entre otras cosas, es necesaria su inspección y mantenimiento
            preventivo o restauración en algunos casos. Todo este trabajo basado en un estudio del estado de
            la estructura con datos capturados por sensores inteligentes desplegados de forma estratégica.</h4><br>
        
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-signal logo"></span>
      </div>
    </div>
  </div>
  
  <div class="container-fluid bg-grey">
    <div class="row">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-globe logo slideanim"></span>
        
      </div>
      <div class="col-sm-8">
        <h2>Nuestros valores</h2><br>
        <h4><strong>MISIÓN:</strong> En FSM Solutions tenemos como misión presentar a nuestros clientes ideas 
            innovadoras y que se encuentren a la vanguardia de la tecnología utilizada en IoT actualmente, para
            ofrecer e implementar soluciones efectivas y a la medida.</h4><br>
        <h4><strong>VISIÓN:</strong> Nuestra visión en FSM Solutions es presentar a muchas más compañias o
            clientes individuales la alternativa y solución final más innovadora acompañada de la tecnología
            a la vanguardia en aplicaciones IoT.</h4>
      </div>
    </div>
  </div>
  
  <!-- Container (Services Section) -->
  <div id="services" class="container-fluid text-center">
    <h2>SERVICIOS</h2>
    <h4>¿Qué ofrecemos?</h4>
    <br>
    <div class="row slideanim">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-duplicate logo-small"></span>
        <h4>Consultoría</h4>
        <p>¿Necesitas asesoria para tu proyecto en monitorización del estado de edificios?</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-list-alt logo-small"></span>
        <h4>Diagnóstico</h4>
        <p>Evaluamos el estado estructural de la propiedad o monumento.</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-home logo-small"></span>
        <h4>Soluciones IoT de Monitoreo Estructural</h4>
        <p>En FSM Solutions tenemos la solución en IoT que se ajusta a tu necesidad</p>
      </div>
    </div>
    <br><br>
  
  <!-- Container (Portfolio Section) -->
  <div id="portfolio" class="container-fluid text-center bg-grey">
    <h2>Portfolio</h2><br>
    <h4>¿Qué hemos desarrollado?</h4>
    <div class="row text-center slideanim">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="cartagena.jpg" alt="Cartagena" width="18" height="18">
          <p><strong>Cartagena</strong></p>
          <p>Seguimientos y control estructural de los diferentes momumentos de la ciudad amurallada</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="medellin.jpg" alt="Medellin" width="400" height="350">
          <p><strong>Medellin</strong></p>
          <p>Monitoreo estructural de zonas residenciales en las comunas mas habitadas de la ciudad </p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="bogota.jpg" alt="Bogotá" width="400" height="300">
          <p><strong>Bogotá</strong></p>
          <p>Control estructural en construcciones de apartamentos del occidente de la ciudad</p>
        </div>
      </div>
    </div><br>
    
    <h2>Por qué elegirnos?</h2>
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <h4>"Experiencia"<br><span>Contamos con una gran pericia a la hora de resolver todo tipo de problemas monitoreando estructuras</span></h4>
        </div>
        <div class="item">
          <h4>"Profesionalidad"<br><span>Tenemos un gran equipo de ingenieros especializacidos en soluciones de IoT para satisfacer sus necesidades</span></h4>
        </div>
        <div class="item">
          <h4>"Compromiso"<br><span>Nos caracterizamos por el envolvimiento en cada uno de los proyectos en los que nos encontramos para velar por su buen funcionamiento</span></h4>
        </div>
      </div>
  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  
  <!-- Container (Pricing Section) -->
  <div id="pricing" class="container-fluid">
    <div class="text-center">
      <h2>Planes</h2>
      <h4>Escoge el mejor plan de acuerdo a tus necedidades</h4>
    </div>
    <div class="row slideanim">
      <div class="col-sm-4 col-xs-12">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1>Básico</h1>
          </div>
          <div class="panel-body">
            <p><strong>2</strong> Nodos sensores</p>
            <p><strong>3</strong> Sensores por nodo</p>
            <p><strong>1</strong> Actuador</p>
            <p><strong>2 Gb</strong> Almacenamiento de datos</p>
            <p><strong>24Hrs</strong> Asistencia Técnica</p>
          </div>
          <div class="panel-footer">
            <h3>$19</h3>
            <h4>Mensual</h4>
            <a href="signup.php" class="btn btn-success">Contrata</a>
          </div>
        </div>      
      </div>     
      <div class="col-sm-4 col-xs-12">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1>Pro</h1>
          </div>
          <div class="panel-body">
            <p><strong>4</strong> Nodos sensores</p>
            <p><strong>5</strong> Sensores por nodo</p>
            <p><strong>2</strong> Actuadores</p>
            <p><strong>4 Gb</strong> Almacenamiento de datos</p>
            <p><strong>24Hrs</strong> Asistencia Técnica</p>
          </div>
          <div class="panel-footer">
            <h3>$29</h3>
            <h4>Mensual</h4>
            <a href="signup.php" class="btn btn-success">Contrata</a>
          </div>
        </div>      
      </div>       
      <div class="col-sm-4 col-xs-12">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1>Premium</h1>
          </div>
          <div class="panel-body">
            <p><strong>10</strong> Nodos sensoresx</p>
            <p><strong>8</strong> Sensores por nodo</p>
            <p><strong>4</strong> Actuadores</p>
            <p><strong>8 Gb</strong> Almacenamiento de datos</p>
            <p><strong>24Hrs</strong> Asistencia Técnica</p>
          </div>
          <div class="panel-footer">
            <h3>$49</h3>
            <h4>Mensual</h4>
            <a href="signup.php" class="btn btn-success">Contrata</a>
          </div>
        </div>      
      </div>    
    </div>
  </div>
  
  <!-- Container (Contact Section) -->
  <div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">COTIZACIONES</h2>
    <div class="row">
      <div class="col-sm-5">
        <h2>Contáctanos</h2>
        <a class="btn btn-default btn-lg" href="https://api.whatsapp.com/send?phone=573108774408">
            <img src="whatsapp.png" width="19" height="19">
        </a>
        <a class="btn btn-default btn-lg" href="https://twitter.com/FsmSolutions?s=08">
            <img src="twitter.png" width="19" height="19">
        </a>
        <a class="btn btn-default btn-lg" href="https://www.instagram.com/fsm_solutions/">
            <img src="insta.png" width="19" height="19">
        </a>
        <p>Escríbenos y te respondemos en menos de 24 horas.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> Bogotá, COL</p>
        <p><span class="glyphicon glyphicon-phone"></span> +57 3333333</p>
        <p><span class="glyphicon glyphicon-envelope"></span> fsm@solutions.com</p>
      </div>
      <div class="col-sm-7 slideanim">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comentario" rows="5"></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Enviar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Image of location/map -->
  <img src="map.jpg" class="w3-image w3-greyscale-min" style="width:100%">
  
  <footer class="container-fluid text-center">
    <a href="#myPage" title="To Top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
  </footer>
  
  <script>
  $(document).ready(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
    
    $(window).scroll(function() {
      $(".slideanim").each(function(){
        var pos = $(this).offset().top;
  
        var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
      });
    });
  })

  console.log($results)
  </script>
  
  </body>
 </html>