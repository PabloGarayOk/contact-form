<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact Form</title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <script src="js/form_mail.js"></script>
    </head>
    <body>
        <h1>Contact Form</h1>

        <form name="form_mail" method="post" action="php/enviar-mail.php" onsubmit="return validar();">

            <?php include("php/mensajes.php"); ?>

            <input type="text" name="name" placeholder="Nombre*" value="<?= $_GET['nombre'] ? $_GET['nombre'] : "" ?>" required="">
          
            <input type="email" name="email" placeholder="Email destinatario*" value="<?= $_GET['email'] ? $_GET['email'] : "" ?>" required="">
            
            <input type="text" name="subject" placeholder="Asunto*" value="<?= $_GET['asunto'] ? $_GET['asunto'] : "" ?>" required="">

            <textarea name="message" placeholder="Mensaje*" required=""><?= $_GET['mensaje'] ? $_GET['mensaje'] : "" ?></textarea>

            <button type="submit" name="submit-form" onclick="validar();"><span>ENVIAR</span></button>

        </form>
    </body>
</html>

