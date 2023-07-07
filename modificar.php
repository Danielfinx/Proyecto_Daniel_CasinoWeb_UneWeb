<html>
    <head>
        <meta charset="utf-8">
        <title>Documento sin título</title>
    </head>

    <body>
        <?php
            include("menu.html");
            include("conexion.php"); 
        ?>

        <table width="600" border="1" align="center">
            <tr>
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
            <br>
            <?php
                $sql = "SELECT * from usuarios";
                $result = mysqli_query($link, $sql); //ejecuto la consulta
                while ($ver = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php print $ver[0]; ?></td>
                        <td><?php print $ver[1]; ?></td>
                        <td><?php print $ver[2]; ?></td>
                        <td><?php print $ver[3]; ?></td>
                        <td><?php print $ver[4]; ?></td>
                        <td><?php print $ver[5]; ?></td>
                        <td><?php print $ver[6]; ?></td>
                        <td><?php print $ver[7]; ?></td>
                        <td><?php print $ver[8]; ?></td>
                        <td><a href="modificar2.php?mod=<?php print $ver[0]; ?> ">Modificar</a></td>
                        <td><a href="eliminar.php?eli=<?php print $ver[0]; ?> ">Eliminar</a></td>
                    </tr>
                <?php } 
            ?>
        </table>
    </body>
</html>