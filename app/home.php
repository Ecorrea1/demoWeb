<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trepar.cl</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

  <!-- Aca va la barra de navegacion -->
 
  		<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Trepar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/app/registro.php">Registros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/app/empresas.php">Empresas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/app/nosotros.php">Nosotros</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="sesion.php">Usuario</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Aca esta el jumbotron que es la base de la pagina  -->
<div class="container-fluid">
	<div class="jumbotron ">
  <h1 class="display-4">Trepar</h1>
  <h3 class="display-7">Turismo aventura en Chile</h3>
  <p class="lead">Este es tu sitio para buscar y organizar tu viaje sin necesidad de dirigirte a otro lugar .</p>
  <p>¿Quieres descubrir todos los más hermosos parajes naturales de Chile? ¿Quieres tener la posibilidad de recorrer lo bello que ofrece esta larga y angosta flora y fauna nacional? Todo esto y más puedes hacer a través de Trepar, pero bajo un concepto que te permite eso y mucho más: arriba de una bicicleta. Nuestra aplicación te ofrece la posibilidad de poder recorrer salir del típico viaje de turismo en el que solo se te muestra la belleza, y conocerla en primera persona a través de un recorrido único en el que tus pies y dos ruedas serán las mejores formas de moverte. Y todo siempre al mejor costo. Porque en Trepar la magia la haces tu.</p>
  <hr class="my-4">
  

<!-- Dentro de el jumbotron esta este formulario -->
<div class="container">
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputOrigen4">Origen</label>
      <input type="text" class="form-control" id="inputOrigen4" placeholder="Ingrese lugar de Origen">
    </div>
    <div class="form-group col-md-6">
      <label for="inputDestino4">Destino</label>
      <input type="text" class="form-control" id="inputDestino4" placeholder="Ingrese lugar de Destino">
    </div>
  
	<div class="form-group col-md-3">
    <label for="inputFida">Fecha Ida</label>
    <input type="date" class="form-control" id="inputFida">
  </div>
  <div class="form-group col-md-3">
    <label for="inputFvuelta">Fecha Vuelta</label>
    <input type="date" class="form-control" id="inputFvuelta">
  </div>

  <div class="form-group col-md-3">
    <label for="inputFida">Habitaciones</label>
    <input type="text" class="form-control" id="inputFida" placeholder="1234 Main St">
  </div>
  <div class="form-group col-md-3">
    <label for="inputFvuelta">Habitaciones 2</label>
    <input type="text" class="form-control" id="inputFvuelta" placeholder="Apartment, studio, or floor">
  </div>

  </div>


  <!-- Prueba de nuevo tipo de text con opciones que nos van a servir mas adelante 
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
	</div>
-->
  <button type="submit" class="btn btn-primary">Buscar</button>

</form>

</div>
<!-- aca termina el formulario -->
<p> </p>

<!-- aca comienzan las fotos -->
<div class="container">
	
		 <div class="row justify-content-around">
<div class="col-md-3">
	<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/santiago.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

<div class="col-md-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/pucon.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

<div class="col-md-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/otro.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

<div class="col-md-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/otro1.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

 <div class="w-100 d-none d-md-block"></div>

<div class="col-md-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/otro2.jpg" alt="Card image cap">
  <div class="card-body">
    <a href="app/empresas.php" class="btn btn-primary">Vamos </a>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

<div class="col-md-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/otro3.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class="col-md-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/otro4.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

<div class="col-md-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/otro5.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
 <div class="w-100 d-none d-md-block"></div>
<div class="col-md-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/otro6.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

<div class="col-md-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/otro7.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

<div class="col-md-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/otro8.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

<div class="col-md-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/otro9.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

 <div class="w-100 d-none d-md-block"></div>

<div class="col-md-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/otro10.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

<div class="col-md-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/otro11.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

<div class="col-md-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/otro12.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

<div class="col-md-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/otro13.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
 <div class="w-100 d-none d-md-block"></div>

</div>

</div>
<!-- aca terminan las fotos -->
  <p class="lead">

  	<p>Quieres saber mas de este espacio y sus las personas que estan detras de este proyectos pincha aqui </p>
    <a class="btn btn-primary btn-lg" href="/app/nosotros.php" role="button">Saber Mas</a>
  </p>

  </div>
</div >
<!-- Aca termina el jumbotron  -->	

<footer class="container">
      <p>© Turismo Aventura 2017 -<?php echo date('Y'); ?> </p>
    </footer>

</body>
</html>
