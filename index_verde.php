<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Red Social - Sistema de Gestión</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
        <style>
            body {
                background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
                min-height: 100vh;
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
            .card {
                border: none;
                border-radius: 15px;
                overflow: hidden;
                transition: all 0.3s ease;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                height: 100%;
            }
            .card:hover {
                transform: translateY(-10px);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            }
            .card-img-top {
                height: 200px;
                object-fit: cover;
                background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .card-icon {
                font-size: 5rem;
                color: white;
            }
            .card-title {
                color: #11998e;
                font-weight: bold;
            }
            .card-text {
                color: #666;
            }
            .btn-card {
                background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
                border: none;
                color: white;
                padding: 0.5rem 2rem;
                border-radius: 25px;
                transition: all 0.3s ease;
            }
            .btn-card:hover {
                transform: scale(1.05);
                box-shadow: 0 5px 15px rgba(17, 153, 142, 0.4);
            }
            footer {
                background: rgba(255, 255, 255, 0.95) !important;
                backdrop-filter: blur(10px);
                margin-top: 3rem;
            }
            .content-wrapper {
                padding: 2rem 0;
            }
            .nav-link {
                font-weight: 500;
                transition: color 0.3s ease;
            }
            .nav-link:hover {
                color: #11998e !important;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg sticky-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <i class="bi bi-share"></i> Red Social
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">
                                    <i class="bi bi-house-door"></i> Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
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

            <div class="content-wrapper">
                <h1 class="main-title text-center">MENÚ PRINCIPAL</h1>

                <div class="container">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-5">
                        <div class="col">
                            <div class="card">
                                <div class="card-img-top">
                                    <i class="bi bi-plus-circle-fill card-icon"></i>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">Insertar</h5>
                                    <p class="card-text flex-grow-1">Agrega nuevos registros a la base de datos. Crea usuarios, publicaciones y contenido para la red social.</p>
                                    <a href="ingresar_registro.php" class="btn btn-card align-self-center mt-3">Acceder</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-img-top">
                                    <i class="bi bi-search card-icon"></i>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">Consultar</h5>
                                    <p class="card-text flex-grow-1">Busca y visualiza información almacenada. Accede a los datos de usuarios y publicaciones existentes.</p>
                                    <a href="#" class="btn btn-card align-self-center mt-3">Acceder</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-img-top">
                                    <i class="bi bi-pencil-square card-icon"></i>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">Modificar</h5>
                                    <p class="card-text flex-grow-1">Actualiza la información existente. Edita perfiles de usuario, publicaciones y configuraciones del sistema.</p>
                                    <a href="#" class="btn btn-card align-self-center mt-3">Acceder</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-img-top">
                                    <i class="bi bi-trash-fill card-icon"></i>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">Eliminar</h5>
                                    <p class="card-text flex-grow-1">Elimina registros de forma segura. Borra usuarios, publicaciones o contenido que ya no sea necesario.</p>
                                    <a href="#" class="btn btn-card align-self-center mt-3">Acceder</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="text-center text-lg-start mt-auto">
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
                    © 2025 Copyright: 
                    <a class="text-decoration-none fw-bold" style="color: #11998e;" href="http://www.itspereira.edu.co">ITS Pereira</a>
                </div>
            </footer>    
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>