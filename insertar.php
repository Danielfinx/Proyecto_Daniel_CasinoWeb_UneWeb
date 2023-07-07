<html>
    <head>
        <title> Registro</title>
    </head>

    <center> <h3> Registro </h3>
        <body>
            <?php
                include ("menu.html");
            ?>
            <br><br>
            <form id="formal" name= "formal" method= "post" action= "insertar1.php">
                <table border= "1" style= "margin: 0 auto;">
                    <th colspan= 2 >Reporte de Usuario</th>
                    <tr><td>Cedula:</td><td><input type= "text" name= "cedula" id= "cedula"><br></td></tr>
                    <tr><td>Nombre:</td><td><input type= "text" name= "nombre" id= "nombre"><br></td></tr>
                    <tr><td>Apellido:</td><td><input type= "text" name= "apellido" id= "apellido"><br></td></tr>
                    <tr><td>Email:</td><td><input type= "text" name= "email" id= "email"><br></td></tr>
                    <tr><td>Telefono:</td><td><input type= "text" name= "telefono" id= "telefono"><br></td></tr>
                    <tr><td>Dirección:</td><td><textarea name="direccion" id="direccion" cols="40" rows="5"></textarea><br></td></tr>
                    <tr><td>Sexo:</td><td align= "center"><input type= "radio" name= "sexo" value= "masculino">Masculino<br>
                    <input type= "radio" name= "sexo" value= "femenino">Femenino<br></td></tr>
                    <tr><td>Nacionalidad:</td><td align= "center">
                        <select name="nacionalidad" id="nacionalidad">
                            <option value="venezolano">Venezolano</option>
                            <option value="uruguayo">Uruguayo</option>
                            <option value="Chileno">Chileno</option>
                            <option value="Argentino">Argentino</option>
                        </select> <br>
                    </td></tr>
                    <tr><td>Ciudad:</td><td><input type= "text" name= "ciudad" id= "ciudad"><br></td></tr>

                    <tr><td align= "center" ><input type="submit" id= "registrar" name= "registrar"></td>
                    <td align= "center"><input type="reset" id= "limpiar" name= "limpiar"></td></tr>

                </table>
            </form>
        </body>
    </center>
</html>