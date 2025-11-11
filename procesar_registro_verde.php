<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Información de Registro - Red Social</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .navbar {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: #11998e !important;
        }
        .main-title {
            color: white;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin: 2rem 0;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }
        .alert {
            border-radius: 10px;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            font-weight: 500;
        }
        .alert-success {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            color: white;
        }
        .alert-danger {
            background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
            color: white;
        }
        .form-container {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            margin: 2rem auto;
            max-width: 800px;
        }
        .form-label {
            color: #11998e;
            font-weight: 600;
        }
        .form-control:focus {
            border-color: #11998e;
            box-shadow: 0 0 0 0.2rem rgba(17, 153, 142, 0.25);
        }
        .btn-primary {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            border: none;
            padding: 0.6rem 2.5rem;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(17, 153, 142, 0.4);
        }
        footer {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            margin-top: auto;
        }
        .nav-link {
            font-weight: 500;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #11998e !important;
        }
        .form-icon {
            color: #11998e;
            margin-right: 0.5rem;
        }
        .info-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 1rem;
            margin-bottom: 1rem;
            border-left: 4px solid #11998e;
        }
    </style>
  </head>
  <body>
    <?php
        // Martes 4 de Noviembre de 2025 By Cesar Adolfo Gonzalez Marin
        // Conexión a la base de datos
        $host = "localhost";
        $usuario = "root";
        $clave = "";
        $BaseDeDatos = "red_social_2025";
        $idCone = mysqli_connect ($host, $usuario, $clave, $BaseDeDatos) or die ("Error conectando al servidor $host con el nombre de usuario $usuario");		
        
        if (!$idCone)
        {
            die("Error conectando al servidor: " . mysqli_connect_error());
        }
         // Fin Conexión a la base de datos

        // Obtener los datos del formulario eliminar los espacios en blanco
        $id = trim($_REQUEST['id']);
        $nombre = trim($_REQUEST['nombre']); 
        $usuario = trim($_REQUEST['usuario']);
        $email = trim($_REQUEST['email']);
        // Fin // Obtener los datos del formulario eliminar los espacios en blanco

        // Variable para controlar el estado del registro
        $registroExitoso = false;

        // Insertar los datos en la tabla usuarios
        $sql = "INSERT INTO usuarios (id, nombre, usuario, correo, nacimiento, id_genero, id_rh) VALUES ('$id', '$nombre', '$usuario', '$email','2000-10-01','1','1')";
        if (mysqli_query($idCone, $sql)) 
            {
                $registroExitoso = true;
            }
        
        // Cerrar la conexión a la base de datos
        mysqli_close($idCone);
        // Fin Insertar los datos en la tabla usuarios
    ?>    
    
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <i class="bi bi-share"></i> Red Social
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <i class="bi bi-house-door"></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="ingresar_registro.php">
                                <i class="bi bi-plus-circle"></i> Insertar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-pencil-square"></i> Modificar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-trash"></i> Eliminar
                            </a>
                        </li>                            
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-search"></i> Consultar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-list-ul"></i> Ver Todo</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-filter"></i> Filtrar</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-bar-chart"></i> Reportes</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <h1 class="main-title text-center">
                <i class="bi bi-info-circle"></i> Información de Registro
            </h1>

            <?php
            if ($registroExitoso) 
            {
                ?>
                <div class="alert alert-success text-center" role="alert">
                    <i class="bi bi-check-circle-fill"></i> ¡Registro insertado correctamente! 
                </div>      
                <?php
            }
            else 
            {
                ?>
                <div class="alert alert-danger text-center" role="alert">
                    <i class="bi bi-x-circle-fill"></i> No se pudo insertar el registro
                    <?php echo "<br>Error: " . $sql . "<br>" . mysqli_error($idCone); ?>
                </div>      
                <?php                
            }   
            ?>
            
            <div class="form-container">
                <form action="ingresar_registro.php" method="post">
                    <div class="info-card">
                        <h5 class="text-center mb-3" style="color: #11998e;">
                            <i class="bi bi-person-check"></i> Datos Registrados
                        </h5>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="id" class="form-label">
                                <i class="bi bi-credit-card form-icon"></i>Documento
                            </label>
                            <input type="text" class="form-control" id="id" name="id" <?php echo "value='$id'"; ?> readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nombre" class="form-label">
                                <i class="bi bi-person form-icon"></i>Nombre
                            </label>
                            <input type="text" class="form-control" id="nombre" name="nombre" <?php echo "value='$nombre'"; ?> readonly>
                        </div>
                    </div>         
                    <div class="row">        
                        <div class="col-md-6 mb-3">
                            <label for="usuario" class="form-label">
                                <i class="bi bi-at form-icon"></i>Usuario
                            </label>
                            <input type="text" class="form-control" id="usuario" name="usuario" <?php echo "value='$usuario'"; ?> readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">
                                <i class="bi bi-envelope form-icon"></i>Email
                            </label>
                            <input type="email" class="form-control" id="email" name="email" <?php echo "value='$email'"; ?> readonly>
                        </div>
                    </div>        
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-arrow-left-circle"></i> Regresar
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <footer class="text-center text-lg-start">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2025 Copyright: 
                <a class="text-decoration-none fw-bold" style="color: #11998e;" href="http://www.itspereira.edu.co">ITS Pereira</a>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>