<?php

?>
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
                                        <label for="nom_usuario">Usuario</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre de usuario">
                                      </div>
                                      <div class="form-group">
                                        <label for="contraseña">Contraseña</label>
                                        <input type="password" class="form-control" id="clave1" placeholder="contraseña">
                                      </div>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Iniciar sesión</button>
                                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>-->
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--boton para registro-->
                            <a class="btn btn-primary" href="datos.php" role="button">Registrate</a>
                            

            


                            <div id="sociales">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </div>
                            <button class="btn btn-warning" type="submit" href="carritocompra.html" >Carrito</button>
                            <div  class="col-lg-1" id="sociales2">
                            <br>
                            <i class="fa fa-facebook" aria-hidden="true"><i class="fa fa-twitter" aria-hidden="true"><i class="fa fa-youtube-play" aria-hidden="true"></i></i></i>

                            </div>
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
    <center><h4 class="card-title"><img src="./images/icon2.png">Formulario de Registro</h4></center>
</div>




<div class="superficie">
<div class="container">
    <div class="row">
    </div>

    <div class="row">
        <div class="offset-2 col-8">
            <form id="registro">
                <div class="form-group">
                <div class="card-block">
                    <div class="form-group row">
                    <label class="form-control-label" for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombreHelp" placeholder="Ingrese su nombre">
                </div>

                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="usuarioHelp" placeholder="Ingrese su usuario">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Ingrese su email">
                    <small id="emailHelp" class="form-text text-muted">Ingrese un mail con el formato usuario@email.com</small>
                </div>

                <div class="form-group">
                    <label for="clave">Clave</label>
                    <input type="password" class="form-control" id="clave" name="clave" aria-describedby="claveHelp" placeholder="Ingrese su clave">
                    <small id="claveHelp" class="form-text text-muted">Su clave debe contener a menos 5 caracteres.</small>
                </div>

                <div class="form-group">
                    <label for="repetirclave">Repita su clave</label>
                    <input type="password" class="form-control" id="repetirclave" name="repetirclave" aria-describedby="repetirclaveHelp" placeholder="Ingrese su clave de nuevo">
                    <small id="repetirclaveHelp" class="form-text text-muted">Vuelva a ingresar su clave.</small>
                </div>

                <button class="btn btn-primary">Enviar</button>
                </div>
                </div>
            </form>
        </div>

    </div>
</div>

</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.-js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/localization/messages_es_PE.min.js"></script>
<script src="js/main3.js"></script>


</body>
</html>