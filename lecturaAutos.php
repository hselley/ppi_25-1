<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
    <link rel="stylesheet" href="estiloTabla.css">
</head>
<body>
    <h1>Listado de compra de autos</h1>
    <?php
        $con=mysqli_connect("localhost", "geeker", "selley", "autos");

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con, "SELECT * FROM compra;");
    ?>

    <table id="consolas">
        <tr>
            <th>id</th>
            <th>idModelo</th>
            <th>idUsuario</th>
            <th>Folio</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)) {
                echo "<tr class=\"renglon2\"><td>" . $row['id'] . "</td><td>" . $row['idModelo'] . "</td><td>" . $row['idUsuario'] . "</td><td>". $row['folio'] . "</td></tr>";
            }

            mysqli_close($con);
        ?>
    </table>
    
</body>
</html>