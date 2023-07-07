<html>
    <head>
        <meta charset="utf-8">
        <title>Documento sin título</title>
    </head>

    <body>
        <h3 align= "center">Buscar</h3>
        <?php
        include("menu.html");
        include("conexion.php");
        ?>
        <form method="POST" name="form1">
            <p>&nbsp;</p>
            <table width="512" height="46" border="0" align="center">
            <tr>
                <th height="40" scope="col">Cedula</th>
                <th scope="col"><input type="text" name="buscar" id="buscar" /></th>
                <th scope="col"><input type="submit" name="bus" value="Buscar" /></th>
            </tr>
            </table>
            <p>&nbsp;</p>
        </form>
        <?php 
            if (isset($_POST['buscar'])) { ?>
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
                    <?php
                        $sql = "select * from usuarios where cedula ='$_POST[buscar]'";
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
                            </tr> 
                        <?php } 
                    ?>
                </table> 
            <?php } 
        ?>
    </body>
</html>