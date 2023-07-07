<!DOCTYPE html>
<html>
    <head>
        <title>Contacto</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h3 align= "center">Contacto</h3>
        <?php
            include ("menu.html");
        ?><br>
        <form id= "form1" name= "form1" method= "post" action="correo.php">
            <table width= "310" heigth= "198" border= "0" align= "center">
                <tr>
                    <th width= "138" align= "left" scope= "col"><label for="Nombre2">Nombre:</label></th>
                    <th widtd= "160" align= "left" scope= "col"><input type="text" name="Nombre" id="Nombre" ></th>
                </tr>
                <tr>
                    <th align= "left" scope= "row"><label for="Correo">Correo:</label></th>
                    <td><input type="text" name="Correo" id="Correo"></td>
                </tr>
                <tr>
                    <th align= "left" scope= "row"><label for="Mensaje">Mensaje:</label></th>
                    <td><textarea name="Mensaje" id="Mensaje"></textarea></td>
                </tr>
                <tr>
                    <th colspan= "2" align= "center" scope= "row"><input type="submit" name="submit" id= "submit" value= "Enviar"></th>
                </tr>
                <tr></tr>
            </table>
            <label for="Mensaje">
                <br><br>
            </label>
        </form>
    </body>
</html>