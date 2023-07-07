<html>
    <head>
        <meta charset="utf-8">
        <title>Documento sin título</title>
    </head>

    <body>
        <h3 align= "center">Consulta</h3>
        <?php
            include("menu.html");
            include("conexion.php");
        ?>
        <table width="600" border="1" align="center">
            <tr><br><br>
                <th scope="col">CEDULA</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">DIRECCION</th>
                <th scope="col">EMAIL</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">SEXO</th>
                <th scope="col">NACIONALIDAD</th>
                <th scope="col">CIUDAD</th>
            </tr>
            <?php
                $sql = "select * from usuarios";
                $result = mysqli_query($link, $sql); //ejecuto la consulta
                while ($vect = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php print $vect[0]; ?></td>
                        <td><?php print $vect[1]; ?></td>
                        <td><?php print $vect[2]; ?></td>
                        <td><?php print $vect[3]; ?></td>
                        <td><?php print $vect[4]; ?></td>
                        <td><?php print $vect[5]; ?></td>
                        <td><?php print $vect[6]; ?></td>
                        <td><?php print $vect[7]; ?></td>
                        <td><?php print $vect[8]; ?></td>
                    </tr> 
                <?php } 
            ?>
        </table>
    </body>
</html>