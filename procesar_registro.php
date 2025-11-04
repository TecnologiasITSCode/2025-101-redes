<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejemplo base de datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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

        // Insertar los datos en la tabla usuarios
        $sql = "INSERT INTO usuarios (id, nombre, usuario, correo) VALUES ('$id', '$nombre', '$usuario', '$email')";
        if (mysqli_query($idCone, $sql)) 
            {
                ?>
                <div class="alert alert-success text-center" role="alert">
                    Registro insertado correctamente! 
                </div>      
                <?php
            }
            else 
            {
                ?>
                <div class="alert alert-danger text-center" role="alert">
                    No se pudo insertar el registro <?php echo "Error: " . $sql . "<br>" . mysqli_error($idCone); ?>
                </div>      
                <?php                
            }   
        // Cerrar la conexión a la base de datos
        mysqli_close($idCone);
        // Fin Insertar los datos en la tabla usuarios


    ?>    
    <h1 class="text-center">Información de Registro</h1>
    <div class="container">
      <form action="ingresar_registro.php" method="post">
        <div class=row>
            <div class="col-6 mb-3">
                <label for="id" class="form-label">Documento</label>
                <input type="text" class="form-control" id="id" name="id" <?php echo "value='$id'"; ?> readonly>
            </div>
            <div class="col-6 mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" <?php echo "value='$nombre'"; ?>readonly>
            </div>
        </div>         
        <div class=row>        
            <div class="col-6 mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" <?php echo "value='$usuario'"; ?>readonly>
            </div>
            <div class="col-6 mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" <?php echo "value='$email'"; ?>readonl>
            </div>
        </div>        
        <button type="submit" class="btn btn-primary">Regresar</button>
      </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>