<!DOCTYPE html>
<html lang="es">
<head>
<head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="style_Admi.css">
                <title>PAGINA WEB</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
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

     
</head>
<body>

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "formulario";
 
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT nombre, apellido, email, asistencia FROM rsvp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<form>";
    echo "<table>";
    echo "<tr><th>nombre</th><th>apellido</th><th>email</th><th>asistencia</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["apellido"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["asistencia"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</form>";

} else {
    echo "No se encontraron registros.";
}

$conn->close();
?>


     
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

</body>
</html>