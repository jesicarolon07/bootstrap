<!DOCTYPE html>
<html lang="es">
    <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="style.css">
                <title>PAGINA WEB</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

    <nav class="menu">
        <div class="logo">ArtBlue</div>
        <div class="hamburger">&#9776;</div>
        <div class="menu-options">
            <a href="#">Home</a>
            <a href="#">Portafolio</a>
            <a href="#">Catalogo</a>
        </div>
    </nav>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recibir datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $asistencia = $_POST['asistencia'];

    // Detalles de conexión
    $servername = "localhost";
    $username = "root";
    $password = ""; // Por defecto en la mayoría de los casos
    $dbname = "formulario";

    // Conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consulta SQL para insertar datos en la tabla rsvp
    $sql = "INSERT INTO rsvp (nombre, Apellido, email, asistencia) VALUES ('$nombre', '$apellido', '$email', '$asistencia')";

    // Ejecutar la consulta y verificar si fue exitosa
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Confirmaste asistencia</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }

    // Cerrar la conexión
    $conn->close();
}
?>


    <form action="RSVP1.php" method="post">
        <div class="Mensaje">

                      <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input  class="form-control" type="text" id="nombre" name="nombre" >
                      </div>

                      <div class="mb-3">
                          <label for="Apellido" class="form-label">Apellido</label>
                          <input  class="form-control" type="text" id="Apellido" name="Apellido">
                      </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control"type="email" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    
                    <label for="asistencia">Asistencia:</label>
                    <select id="asistencia" name="asistencia">
                        <option value="Sí">Sí</option>
                        <option value="No">No</option>
                    </select><br><br>
                    <input type="submit" class="button" value="Enviar">
         </div>
              
     </form>

     
     <footer class="footer">
                <div class="footer-item">
                    <img src="img/hhhhhhhhhhhhhhhhhhhhhhhhhhhh.PNG" alt="Imagen 1">
                </div>
                <div class="footer-item">
                    <img src="img/ddss.PNG" alt="Imagen 2">
                </div>
                <div class="footer-item">
                    <img src="img/kkkkkkkkkkk.PNG" alt="Imagen 3">
                </div>
                <div class="footer-item">
                    <img src="img/d.PNG" alt="Imagen 3">
                </div>
               
                <div class="footer-text">
                    <p>Copyright 2024 ArtBlue |  Buenos Aires, Argentina</p>
                </div>
            </footer>
</html>          
         