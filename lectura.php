<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <h1>Listado de usuarios</h1>
    <?php
        $con=mysqli_connect("localhost", "geeker", "selley", "prueba");

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con, "SELECT * FROM registro;");
    ?>

    <table>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)) {
                echo "<tr><td>" . $row['id'] . "</td><td>" . $row['nombre'] . "</td><td>" . $row['apellido'] . "</td><td>". $row['edad'] . "</td></tr>";
            }

            mysqli_close($con);
        ?>
    </table>
    
</body>
</html>