<?php
    $Mensaje = "Nombre: $_POST[Nombre]
                Correo: $_POST[Correo]
                Mensaje: $_POST[Mensaje]";
    if (mail("correo@mipagina.com", "Asunto", $Mensaje)) { ?>
        <script>
            alert("Se envio el correo");
        </script> }
    <?php } else { ?>
        <script>
            alert("Estamos en mantenimiento preventivo");
        </script>
    <?php } 
    //<meta http-equiv="refresh" content="0;URL=contacto.php">
?>

