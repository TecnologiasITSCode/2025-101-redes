<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de Usuarios - Red Social</title>
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
        .btn-secondary {
            background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
            border: none;
            padding: 0.6rem 2.5rem;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-secondary:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(108, 117, 125, 0.4);
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
    </style>
  </head>
  <body>
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
                            <a class="nav-link active" aria-current="page" href="#">
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
                <i class="bi bi-person-plus"></i> Registro de Usuarios
            </h1>
            
            <div class="form-container">
                <form action="procesar_registro.php" method="post">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="id" class="form-label">
                                <i class="bi bi-credit-card form-icon"></i>Documento
                            </label>
                            <input type="text" class="form-control" id="id" name="id" placeholder="Documento" required autofocus="autofocus">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nombre" class="form-label">
                                <i class="bi bi-person form-icon"></i>Nombre
                            </label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="genero" class="form-label">
                                <i class="bi bi-person form-icon"></i>Genero
                            </label>
                            <input type="text" class="form-control" id="genero" name="genero" placeholder="Genero" required>
                        </div>                        
                    </div>         
                    <div class="row">        
                        <div class="col-md-3 mb-3">
                            <label for="usuario" class="form-label">
                                <i class="bi bi-at form-icon"></i>Usuario
                            </label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su nombre de usuario" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="email" class="form-label">
                                <i class="bi bi-envelope form-icon"></i>Email
                            </label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="correo@ejemplo.com" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="nacimiento" class="form-label">
                                <i class="bi bi-at form-icon"></i>Nacimiento
                            </label>
                            <input type="text" class="form-control" id="nacimiento" name="nacimiento" placeholder="Fecha" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="email" class="form-label">
                                <i class="bi bi-envelope form-icon"></i>RH
                            </label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Tipo RH" required>
                        </div>                        
                    </div>        
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary me-2">
                            <i class="bi bi-check-circle"></i> Registrar
                        </button>
                        <a href="index.php" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Cancelar
                        </a>
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