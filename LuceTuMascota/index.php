<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Luce tu mascota</title>
    <link rel="stylesheet" href="css/estilos2.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <nav class="navbar navbar-toggleable-md navbar-light">
        <div class="row">
            <div class="col-3 justify-content-center">
                <a class="navbar-brand" href="index.html">
                    <img id="logo" src="./images/logo1.png" alt="Logo luce tu mascota">
                </a>
            </div>
            <div class="col-9">
                <div id="contactos" class="row">
                    <div class="col-10">
                        <div class="row justify-content-end">
                            <button class="btn btn-secondary" data-toggle="modal" id="sesion" data-target="#myModal">Iniciar sesión</button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Iniciar sesión</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form>
                                      <div class="form-group">
                                        <label for="formGroupExampleInput">Correo electrónico</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="e-mail">
                                      </div>
                                      <div class="form-group">
                                        <label for="formGroupExampleInput2">Contraseña</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="contraseña">
                                      </div>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Iniciar sesión</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>

                            
                            <button class="btn btn-secondary" data-toggle="modal" id="registro" data-target="#myModal1">Registrarse</button>

                            <input type="text" id="usuario">

                            <!-- Modal -->
                            <div class="modal fade" id="myModal1">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Registrarse</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="" >
                                      <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                                      </div>
                                      <div class="form-group">
                                        <label for="apellido">Apellido</label>
                                        <input type="text" class="form-control" id="apellido" placeholder="Apellido">
                                      </div>
                                      <div class="form-group">
                                        <label for="email">Correo electrónico</label>
                                        <input type="text" class="form-control" id="email" placeholder="E-mail">
                                      </div>
                                      <div class="form-group">
                                        <label for="clave">Contraseña</label>
                                        <input type="password" class="form-control" id="clave" placeholder="contraseña">
                                      </div>
                                      <div class="form-group">
                                        <label for="repetirclave">Repetir contraseña</label>
                                        <input type="password" class="form-control" id="repetirclave" placeholder="Repetir contraseña">
                                      </div>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" id="enviar" data-dismiss="modal" >Listo</button>
                                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>-->
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="sociales">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </div>
                            <button class="btn btn-warning" type="submit" href="carritocompra.html" >Carrito</button>
                        </div>
                    </div>
                    
                </div>


                <div class="row justify-content-end" id="menu-principal " >
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="row justify-content-end" id="menu-principal " >
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="nav nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">Inicio</a>
                        </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Accesorios</a>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="accesoriosperrito.html">Perros</a>
                    <a class="dropdown-item" href="accesoriosgatito.html">Gatos</a>
                </div>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="politicas.html">Como comprar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactanos.html" >Contáctanos</a>
                </li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </nav>

    <br>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="./images/slider.jpeg" alt="First slide">
          <div class="cont"><br><br><br><h1>Es tan sencillo hacerlos felices</h1></div>
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="./images/slider1.jpeg" alt="Second slide">
          <div class="cont"><br><br><br><h1>Es tan sencillo hacerlos felices</h1></div>
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="./images/slider2.jpeg" alt="Third slide">
          <div class="cont"><br><br><br><h1>Es tan sencillo hacerlos felices</h1></div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <br>

    <h1 class="page-header">Consiénteme</h1>
    <br>
    <div class="card-deck">
      <div class="card">
        <a href="perros.html"> <img class="card-img-top" src="./images/dog3.jpeg" alt="Card image cap"></a>
        <div class="card-block">
          <h4 class="card-title">Collar con larguero seguro</h4>
        </div>
      </div>
      <div class="card">
        <a href="perros.html"><img class="card-img-top" src="./images/dog1.jpg" alt="Card image cap"></a>
        <div class="card-block">
          <h4 class="card-title">Cojín</h4>
        </div>
      </div>
      <div class="card">
        <a href="perros.html"><img class="card-img-top" src="./images/gog2.jpeg" alt="Card image cap"></a>
        <div class="card-block">
          <h4 class="card-title">Arnés adorable</h4>
        </div>
      </div>
    </div>

    <br>
    <div class="card-deck">
      <div class="card">
        <a href="gatos.html"> <img class="card-img-top" src="./images/cat1.jpeg" alt="Card image cap"></a>
        <div class="card-block">
          <h4 class="card-title">Cascabel</h4>
        </div>
      </div>
      <div class="card">
        <a href="gatos.html"><img class="card-img-top" src="./images/cat2.jpeg" alt="Card image cap"></a>
        <div class="card-block">
          <h4 class="card-title">Cama descanzo feliz</h4>
        </div>
      </div>
      <div class="card">
        <a href="gatos.html"><img class="card-img-top" src="./images/cat3.jpg" alt="Card image cap"></a>
        <div class="card-block">
          <h4 class="card-title">Sofá ultra moderno</h4>
        </div>
      </div>
    </div>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Luce tu mascota 2017</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->


<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

<!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>