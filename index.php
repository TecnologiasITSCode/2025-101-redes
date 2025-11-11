<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Red Social</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="ingresar_registro.php">Insertat</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Modificar</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Eliminar</a>
                            </li>                            
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Consultar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h1 class="text-primary text-center">MENU PRINCIPAL</h1>

            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Insertar</h5>
                        <p class="card-text">Agrega nuevos registros a la base de datos. Crea usuarios, publicaciones y contenido para la red social.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Consultar</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Modificar</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Eliminar</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>





            <footer class="bg-light text-center text-lg-start">
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2025 Copyright:
                    <a class="text-dark" href="http://www.itspereira.edu.co">ITS Pereira</a>
                </div>
            </footer>    
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>