
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FSM Solutions</title>
    <link rel="icon" type="image/png" href="logo2.PNG">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      background-color: #6b6a69;
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

    .card {
      display: grid;
      grid-template-columns: 475px;
      max-width: 500px;
      grid-template-rows: 300px 200px 50px;
      grid-template-areas: "image" "text" "stats";
      border-radius: 18px;
      background: white;
      box-shadow: 5px 5px 15px rgba(0,0,0,0.9);
      font-family: roboto;
      text-align: center;
    }

    .card-image {
      grid-area: image;
      margin: 25px;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      background-size: cover;
    }


    .card-text {
      grid-area: text;
      margin: 25px;
    }
    .card-text .date {
      color: rgb(255, 7, 110);
      font-size:13px;
    }
    .card-text p {
      color: grey;
      font-size:15px;
      font-weight: 300;
    }
    .card-text h2 {
      margin-top:0px;
      font-size:28px;
    }

    .card-stats {
      grid-area: stats; 
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      grid-template-rows: 1fr;
      border-bottom-left-radius: 15px;
      border-bottom-right-radius: 15px;
      background: rgb(255, 7, 110);
    }


    .card-stats .stat {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      color: white;
      padding:10px;
    }

    .card:hover {
      transform: scale(1.15);
      box-shadow: 5px 5px 15px rgba(0,0,0,0.6);
    }
    .card {
    ...
      transition: 0.5s ease;
      cursor: pointer;
      margin:30px;
    }


    
    /* Float four columns side by side */
    .column_1 {
      float: left;
      width: 50%;
      padding: 50px;
    }
    
    .column_2 {
      float: left;
      width: 29%;
      padding: 50px;
    }
    
    .row2 {margin: 25px;}
    
    /* Remove extra left and right margins, due to padding in columns */
    .row {margin: 0 -5px;}

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
     .btn-whatsapp {
        display:block;
        width:70px;
        height:70px;
        color#fff;
        position: fixed;
        right:20px;
        bottom:20px;
        border-radius:50%;
        line-height:80px;
        text-align:center;
        z-index:999;
}
    
    /* Responsive columns - one column layout (vertical) on small screens */
        @media screen and (max-width: 600px) {
          .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
          }
        }
        
        
         /* Style buttons */
        .btn {
          background-color: DodgerBlue; /* Blue background */
          border: none; /* Remove borders */
          color: white; /* White text */
          padding: 12px 16px; /* Some padding */
          font-size: 16px; /* Set a font size */
          cursor: pointer; /* Mouse pointer on hover */
        }
        
        /* Darker background on mouse-over */
        .btn:hover {
          background-color: RoyalBlue;
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
            <img src="logo2.PNG" width="40" height="40" alt="Haz clicK aquí para volver a la página de inicio">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#location">UBICACION</a></li>
          <li><a href="#datos">DATOS</a></li>
          <li><a href="#acciones">ACCIONES</a></li>
          <li><a href="#cuenta">CUENTA</a></li>
          <li><a href="index.php">SALIR</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="btn-whatsapp">
       <a href="https://api.whatsapp.com/send?phone=573185769857" target="_blank">
           <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="">
       </a>
  </div>
  
  <div class="jumbotron text-center">
    <h1>FSM Solutions</h1> 
    <p>Especialistas en soluciones de IoT</p> 
  </div>
  
  
  <!-- Container (Services Section) -->
  <div id="location" class="container-fluid text-center">
    <h2>Ubicación</h2>
    <h4>Locación geográfica de la edificacion monitorizada</h4>
    <div class="row">
    <div class="column_2"></div>
        <div class="column_2">
            <div >
              <div class="card-image">
                <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1515074/maps/channel_show"></iframe>
              </div>
              <div class="card-text" style="align:center">
              </div>
            </div>
        </div> 
    </div> 
    <div class="column_2"></div>
  </div>
  
  <!-- Container (Services Section) -->
  <div id="datos" class="container-fluid text-center">
    <h2>Datos</h2>
    <h4>DASHBOARD EN TIEMPO REAL</h4>
    <br>
    
    <div class="row">
        <div class="column_1">
          <div class="card">
            <div class="card-image">
                <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1518517/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
            </div>
            <div class="card-text">
              <h2>Torsión histórica</h2>
              <p>Registro de torsión en el tiempo</p>
            </div>
          </div>
        </div>
        <div class="column_1">
        <div class="card">
            <div class="card-image">
                <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1518517/widgets/384822"></iframe>
            </div>
            <div class="card-text">
              <h2>Torsión en tiempo real</h2>
              <p>Valor de torsión actual</p>
            </div>
          </div>
        </div>
      </div> 

      <div class="row">
        <div class="column_1">
          <div class="card">
            <div class="card-image">
                <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1518517/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&yaxis=Inclinacion"></iframe>
            </div>
            <div class="card-text">
              <h2>Inclinación histórica</h2>
              <p>Registro de inclinación en el tiempo</p>
            </div>
          </div>
        </div>
        <div class="column_1">
        <div class="card">
            <div class="card-image">
                <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1518517/widgets/384823"></iframe>
            </div>
            <div class="card-text">
              <h2>Inclinación en tiempo real</h2>
              <p>Valor de inclinación actual</p>
            </div>
          </div>
        </div>
      </div> 
      
      <div class="row">
        <div class="column_1">
          <div class="card">
            <div class="card-image">
                    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1515074/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Temperatura+Interna&type=line&yaxis=Temperatura"></iframe>
            </div>
            <div class="card-text">
              <h2>Temperatura Interna Histórica</h2>
              <p>Registro de temperatura interna de la edificación</p>
            </div>
          </div>
        </div>
        <div class="column_1">
        <div class="card">
            <div class="card-image">
                    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1515074/widgets/384526"></iframe>
            </div>
            <div class="card-text">
              <h2>Temperatura Interna actual</h2>
              <p>Valor de temperatura actual interna en la edificación</p>
            </div>
          </div>
        </div>
      </div> 
      
      <div class="row">
        <div class="column_1">
          <div class="card">
            <div class="card-image">
                    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1515074/charts/6?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Temperatura+Externa&type=line&yaxis=Temperatura"></iframe>
            </div>
            <div class="card-text">
              <h2>Temperatura Externa histórica</h2>
              <p>Registro de temperatura externa de la edificación</p>
            </div>
          </div>
        </div>
        <div class="column_1">
        <div class="card">
            <div class="card-image">
                    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1515074/widgets/384818"></iframe>
            </div>
            <div class="card-text">
              <h2>Temperatura Externa actual</h2>
              <p>Temperatura externa de la edificación en tiempo real</p>
            </div>
          </div>
        </div>
      </div> 
      
      <div class="row">
        <div class="column_1">
          <div class="card">
            <div class="card-image">
                    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1515074/charts/5?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Humedad&type=line"></iframe>
            </div>
            <div class="card-text">
              <h2>Humedad Externa Histórica</h2>
              <p>Humedad externa de la edificación</p>
            </div>
          </div>
        </div>
        <div class="column_1">
        <div class="card">
            <div class="card-image">
                <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1515074/widgets/384808"></iframe>
            </div>
            <div class="card-text">
              <h2>Humedad actual externa</h2>
              <p>Valor de humedad actual externa</p>
            </div>
          </div>
        </div>
      </div> 
      
      <div class="row">
        <div class="column_1">
          <div class="card">
            <div class="card-image">
                <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1515074/charts/7?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Gas&type=line"></iframe>
            <div class="card-text">
              <h2>Gas Internamente Histórico</h2>
              <p>Registro del gas medido internamente en la edificación</p>
            </div>
          </div>
        </div>
        </div>
        <div class="column_1">
        <div class="card">
            <div class="card-image">
                <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1515074/widgets/385471"></iframe>
            </div>
            <div class="card-text">
              <h2>Gas Interno en tiempo real</h2>
              <p>Valor de gas medido internamente en la edificación</p>
            </div>
          </div>
        </div>
      </div> 
    
  </div>
  
  
  
  <!-- Container (Services Section) -->
  <div id="acciones" class="container-fluid text-center">
    <h2>Acciones</h2>
    <h4>Ejecute una acción</h4>
    <br>
    
    
    <div class="row">
        
        <div class="column_1">
            <div class="card">
              <div class="card-image">
                <button type="button card-text">
                    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1518517/widgets/384825"></iframe>
                </button> 
              </div>
              <div class="card-text">
                <h2>Cerrar</h2>
                <p>Acciona el cerrado de la válvula</p>
              </div>
              <div class="card-stats">
                  <div clas="stat">
                    <form method="get" action="GET https://api.thingspeak.com/update?api_key=8T021W8KH0KQ465G">
                    <button class="btn"><i class="fa fa-power-off" type=type="submit"></i> Cerrar</button>
                  </div>
              </div>
            </div>
        </div> 
        
        
        <div class="column_1">
            <div class="card">
              <div class="card-image">
                <button type="button card-text">
                    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1518517/widgets/384825"></iframe>
                </button> 
              </div>
              <div class="card-text">
                <h2>Abrir</h2>
                <p>Acciona la apertura de la válvula</p>
              </div>
              <div class="card-stats stat">
                <div clas="stat">
                  <form method="get" action="https://api.thingspeak.com/update?api_key=8T021W8KH0KQ465G">
                  <button class="btn"><i class="fa fa-power-off" type=type="submit"></i> Abrir</button>
                  
                </div>
              </div>
            </div>
        </div> 
    </div> 
  
  
 
  

    
  
  <!-- Container (Cuenta Section) -->
  <div id="cuenta" class="container-fluid bg-grey">
    <h2 class="text-center">CUENTA</h2>
    <div class="row">
      <div class="col-sm-5">
        <h2>Contáctanos</h2>
        <a class="btn btn-default btn-lg" href="https://api.whatsapp.com/send?phone=573108774408">
            <img src="whatsapp.png" width="50" height="50">
        </a>
        <p>Contactanos y te respondemos en menos de 24 horas.</p>
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
  </script>
  
  </body>
  </html>