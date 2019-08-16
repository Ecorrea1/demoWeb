


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo</title>
  <link rel="stylesheet" href="app/css/formatos.css" type="text/css">
  <link rel="stylesheet" href="app/css/formato_pie_pagina.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  

    <link href="app/img/icono_web.png" type="image/x-icon" rel="shortcut icon"/>
    <!-- ajax -->
    <script src="app/func/ajax.js" type="text/javascript"></script>
    <!-- jquery - alert - confirm-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!--formatos - validaciones --> 
    
    <script src="index2.js" type="text/javascript"></script> 
</head>
<body class="p-3 mb-2 bg-dark">

  <!-- Aca va la barra de navegacion -->
 
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Demo</a>
       
        <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Portal</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="app/registro.php">Registrate</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="app/sesion.php">Iniciar Sesion</a>
            </li>
          </ul>
        </div>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

</nav>

<!-- Aca esta el jumbotron que es la base de la pagina  -->
<div class="container-fluid">
	<div class="jumbotron ">
  <h1 class="display-4">Demo</h1>
  <h3 class="display-7">Pagina Portafolio</h3>
  <p class="lead">Este es tu sitio para buscar y organizar tu viaje sin necesidad de dirigirte a otro lugar .</p>
 
  <hr class="my-4">
  


<!-- Dentro de el jumbotron esta este formulario -->
<div class="container-fluid" >
      <form class="border rounded border-dark container-fluid buscador">

                <h1 class="titulo_buscador" >Encuentra las mejores actividades</h1>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputOrigen4">Ciudad</label>
                    <input type="text" class="form-control" id="inputOrigen4" placeholder="Ingrese Ciudad">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputDestino4">Actividad</label>
                    <input type="text" class="form-control" id="inputDestino4" placeholder="Ingrese Actividad">
                  </div>
         
                </div>


               
                <button type="button" class="btn btn-success btn-lg btn-block" >Buscar</button>

      </form>


</div>
<!-- aca termina el formulario -->
<tr><td colspan="8"><hr size="1" color="#6E6E6E"></td></tr>

<!-- aca comienza las fotos gigantes -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/bg4.jpg" alt="First slide">
       <div class="carousel-caption d-none d-md-block">
    <h1>Esto es una prueba</h1>
    <p>Esto es una prueba</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/bg5.jpg" alt="Second slide">
       <div class="carousel-caption d-none d-md-block">
    <h1>Esto es una prueba</h1>
    <p>Esto es una prueba</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/bg3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h1>Esto es una prueba</h1>
    <p>Esto es una prueba</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- aca terminan las fotos gigantes -->

<tr><td colspan="4"><hr size="1" color="#6E6E6E"></td></tr>


<!-- aca comienzan las fotos -->
<div class="container-fluid">
	
                          		
                                        

                                            <div class="card-deck">


                                              
                                              	<div class="card" style="width: 100%">
                                                <img class="card-img-top" src="img/santiago.jpg" alt="Card image cap">
                                               <div class="card-body">
                                                  <a href="app/app-empresas/empresas.php" class="btn btn-primary">Vamos </a>
                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                                <div class="card-footer">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                              </div>
                                              </div>
                                              

                                          
                                                <div class="card" style="width: 100%">
                                                <img class="card-img-top" src="img/pucon.jpg" alt="Card image cap">
                                               <div class="card-body">
                                                  <a href="app/app-empresas/empresas.php" class="btn btn-primary">Vamos </a>
                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                                <div class="card-footer">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                              </div>
                                              </div>
                                              

                                            
                                               <div class="card" style="width: 100%">
                                                <img class="card-img-top" src="img/otro.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                  <a href="app/app-empresas/empresas.php" class="btn btn-primary">Vamos </a>
                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                                <div class="card-footer">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                              </div>
                                              </div>
                                              
                                            </div>
                        
                              <tr><td colspan="3"><hr size="1" color="#6E6E6E"></td></tr>

                                             <div class="card-deck">

                                                              
                                                                <div class="card" style="width: 100%">
                                                                <img class="card-img-top" src="img/otro1.jpg" alt="Card image cap">
                                                                
                                                                <div class="card-body">
                                                                  <a href="app/app-empresas/empresas.php" class="btn btn-primary">Vamos </a>
                                                                  <p class="card-title">Punta Arenas</p>
                                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                                </div>
                                                                <div class="card-footer">
                                                                <small class="text-muted">Last updated 3 mins ago</small>
                                                              </div>
                                                              </div>
                                                            


                                                             
                                                               <div class="card" style="width: 100%">
                                                                <img class="card-img-top" src="img/otro2.jpg" alt="Card image cap">
                                                               <div class="card-body">
                                                          <a href="app/app-empresas/empresas.php" class="btn btn-primary">Vamos </a>
                                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                                </div>
                                                                <div class="card-footer">
                                                                <small class="text-muted">Last updated 3 mins ago</small>
                                                              </div>
                                                              </div>
                                                            

                                                             
                                                              <div class="card" style="width: 100%">
                                                                <img class="card-img-top" src="img/otro3.jpg" alt="Card image cap">
                                                                <div class="card-body">
                                                                  <a href="app/app-empresas/empresas.php" class="btn btn-primary">Vamos </a>
                                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                                </div>
                                                                <div class="card-footer">
                                                                <small class="text-muted">Last updated 3 mins ago</small>
                                                              </div>
                                                              </div>
                                                              
                                            </div>
                              

<!-- aca terminan las fotos -->





  </div> <!-- Aca termina el container de las fotos  -->
</div >
<!-- Aca termina el jumbotron  -->	
<tr><td colspan="8"><hr size="4" color="#6E6E6E"></td></tr>

<footer>    
    <div class="container-footer-all">    
        <div class="container-body">    
            <div class="colum1">
                <h1>Quienes Somos?</h1>    
                <p>
                    Treppar es un portal chileno de internet, donde podr&aacute;s buscar, en forma f&aacute;cil y efectiva, todas las actividades de turismo aventura 
                    y alojamientos en Chile, as&iacute; como otros servicios derivados del turismo en el pa&iacute;s, y donde se desplegar&aacute; una gran variedad de actividades 
                    y alojamientos, en todas sus clases. Al elegir, podr&aacute;s reservar y pagar tu compra, asegurando de esta forma una grata estad&iacute;a 
                    y una emocionante aventura. 
                   
                </p>
            </div>
    
            <div class="colum2">
                <h1>Redes Sociales</h1>
                <div class="row">
                    <a href="#">
                    <img src="img/facebook.png"></a>
                    <label>Siguenos en Facebook</label>
                </div>
                <div class="row">
                 <a href="#">
                    <img src="img/twitter.png"> </a>
                    <label>Siguenos en Twitter</label>
                </div>
                <div class="row">
                     <a href="#">
                    <img src="img/instagram.png"></a>
                    <label>Siguenos en Instagram</label>
                </div>
                <div class="row">
                    <a href="#">
                    <img src="img/google-plus.png"></a>
                    <label>Siguenos en Google Plus</label>
                </div>
                <div class="row">
                    <a href="#">
                    <img src="img/youtube.png"></a>
                    <label>Siguenos en Youtube</label>
                </div>
            </div>
    
            <div class="colum3">    
                <h1>Informacion Contactos</h1>    
                <div class="row2">
                    <img src="img/house.png">
                    <label>
                        Luis Uribe Sur S/N, Lote 29, Quepe, Freire
                    </label>
                </div>    
                <div class="row2">
                    <img src="img/smartphone.png">
                    <label>+56933329406</label>
                </div>    
                <div class="row2">
                    <img src="img/contact.png">
                     <label>ebcorreac@gmail.com</label>
                </div>    
            </div>    
        </div>    
    </div>
    
    <div class="container-footer">
           <div class="footer">
                <div class="copyright">
                    © <?php echo date('Y'); ?> Todos los Derechos Reservados | <a href="">Treppar</a>
                </div>
    
                <div class="information">
                    <a href="#">Que es el Portal Tour Operadores</a> | 
                    <a href="#">Pol&iacute;ticas de Privacidad</a> | 
                    <a href="#">Terminos y Condiciones</a>
                </div>
            </div>    
        </div>    

</body>
</html>
