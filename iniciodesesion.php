<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="loginform.css">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="sidenav">
            <div class="login-main-text">
                <h1>DitLulo</h1>
                <h2>Encuentra Trabajo</h2>
                <p>Bienvenido a DITLULO, esta es una "red social" donde podrás conseguir trabajo fácilmente desde casa.
                    <br> Teniendo esto en
                    cuenta, ¿Que esperas para iniciar?
                </p>

            </div>
        </div>
        <div class="main">
            <div class="col-md-6 col-sm-12">
                <div class="login-form">
                    <form action="newlogin.php" method="post">
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="email" class="form-control" name="correo" placeholder="Correo" required>
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" name="clave" placeholder="Contraseña" required>
                        </div>
                      <button class="btn btn-black" type="submit" name="btn">Ingresar</button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Regístrate</button>
                    </form>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 c ass="modal-title fs-5" id="exampleModalLabel">Registrar usuario</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- inicio -->
                                    <form action="regusuarios.php" method="post" class="row g-3" enctype="multipart/form-data">

                                        <div class="col-md-6">
                                            <label for="inputEmail4"  class="form-label">Correo</label>
                                            <input type="email" name="correo" class="form-control" required id="inputEmail4"
                                                placeholder="correo123@ejemplo.com">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputZip" class="form-label">Contraseña</label>
                                            <input type="password" name="clave" class="form-control" required id="inputZip"
                                                placeholder="******">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputZip" class="form-label">Cédula</label>
                                            <input type="number" name="documento" class="form-control" required id="inputZip">
                                        </div>
                                        <div class="col-md-6">
                                            <p>Subir foto de perfil</p>
                                            <input type="file" name="image" Id="" accept="image/*">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Dirección</label>
                                            <input type="text" name="direccion" class="form-control" required id="inputAddress"
                                                placeholder="Cra. 123A. #321">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputZip" class="form-label">Nombre</label>
                                            <input type="text" name="nombre" class="form-control" required id="inputZip">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputZip" class="form-label">Apellido</label>
                                            <input type="text" name="apellido" class="form-control" required id="inputZip">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputZip" class="form-label">Número de contacto</label>
                                            <input type="number" name="numero" class="form-control" required id="inputZip">
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" required id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    Acepto términos y condiciones.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-black">Registrar</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- fin -->
                </div>

            </div>
        </div>
        <script src="js/bootstrap.js"></script>
</body>

</html>