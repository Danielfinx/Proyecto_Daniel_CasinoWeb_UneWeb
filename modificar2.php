<html>
    <head>
        <meta charset="utf-8">
        <title>Documento sin título</title>
    </head>
    <body> 
        <?php 
            include "conexion.php";
            $sql = "select * from usuarios where cedula ='$_GET[mod]'";
            $result = mysqli_query($link, $sql);
            $ver = mysqli_fetch_array($result);
        ?>
        <form id="form1" name="form1" method="post" action="modificar3.php">
            <p>
                <label for="textfield">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="<?php print $ver[1]; ?>" />
            </p>
            <p>
                <label for="textfield2">Apellido:</label>
                <input type="text" name="apellido" id="apellido" value="<?php print $ver[2]; ?>" />
            </p>
            <p>
                <label for="textfield3">Direccion:</label>
                <input type="text" name="direccion" id="direccion" value="<?php print $ver[3]; ?>" />
            </p>
            <p>
                <label for="textfield3">Email:</label>
                <input type="text" name="email" id="email" value="<?php print $ver[4]; ?>" />
            </p>
            <p>
                <label for="textfield3">Telefono:</label>
                <input type="text" name="telefono" id="telefono" value="<?php print $ver[5]; ?>" />
            </p>
            <p>
                <label>
                    <?php 
                        if ($ver[6 == 'Femenino']) { ?>
                            <input type="radio" name="Sexo" value="Femenio" id="Sexo_0" checked="checked" />
                        <?php } else { ?> 
                            <input type="radio" name="Sexo" value="Femenino" id="Sexo_0" />
                        <?php } 
                    ?>
                    Femenino
                </label>
                <br>
                <label>
                    <?php 
                        if ($ver[6 == 'Masculino']) { ?>
                            <input type="radio" name="Sexo" value="Masculino" id="Sexo_1" checked="checked" />
                        <?php } else { ?> 
                            <input type="radio" name="Sexo" value="Masculino" id="Sexo_1" />
                        <?php }
                    ?>
                    Masculino
                </label>
                <br>
            </p>
            <p>
                <label for="select">Nacionalidad:</label>
                <select name="nacionalidad" id="nacionalidad">
                    <option value="<?php print $ver[7]; ?>"><?php print $ver[7]; ?></option>
                    <option value="venezonalo">Venezolano</option>
                    <option value="uruguayo">Uruguayo</option>
                    <option value="chileno">Chileno</option>
                    <option value="argentino">Argentino</option>
                </select>
            </p>
            <p>
                <label for="textfield3">Ciudad:</label>
                <input type="text" name="ciudad" id="ciudad" value="<?php print $ver[8]; ?>" />
            </p>
            <p>
                <input type="hidden" name="oculto" id="oculto" value="<?php print $ver[0]; ?>" />
            </p>
            <input type="submit" name="submit" id="submit" value="Enviar">
        </form>
    </body>
</html>