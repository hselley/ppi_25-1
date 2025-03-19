<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exito</title>
</head>
<body>
    <h1>Registro exitoso</h1>
    <?php
        $con = mysqli_connect("localhost", "geeker", "selley", "prueba");

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        // escape variables for security
        $firstname = mysqli_real_escape_string($con, $_POST['nombre']);
        $lastname = mysqli_real_escape_string($con, $_POST['apellido']);
        $age = mysqli_real_escape_string($con, $_POST['edad']);

        $sql="INSERT INTO registro (nombre, apellido, edad)
        VALUES ('$firstname', '$lastname', '$age');";

        if (!mysqli_query($con,$sql)) {
            die('Error: ' . mysqli_error($con));
        }
        echo "<p>Se registró el usuario exitosamente</p>";

        mysqli_close($con);
    ?>
    <p><a href="registro.html">Regresar al registro</a></p>
</body>
</html>