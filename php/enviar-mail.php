<?php

/* 
* Enviar-mail
* Description: Validacion de campos del formulario de contacto y envio del mail.
* Version: 1.0
* Author: 2021 - Pablo Garay
* https://github.com/PabloGarayOk/Formulario-de-contacto.git
*/
	
   if(!$_POST) exit;

   //Capturamos los datos enviados por POST desde la pagina "index.php".

   $name             = $_POST["name"];
   $email            = $_POST["email"];            
   $subject          = $_POST["subject"];
   $message          = $_POST["message"];

   //Comprobamos que el email tenga un formato correcto.

   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    
      header("location:../index.php?estados=C&nombre=$name&email=$email&asunto=$subject&mensaje=$message");
      exit;

   }else{

      //Preparamos los headers.

      $headers        = "MIME-Version: 1.0\r\n"; 
      $headers       .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
      $headers       .= "From: " . $name . " - Mensaje desde el formulario.\r\n";
      $headers       .= "Reply-To: " . $email . "\r\n";
      
      //Armamos el mensaje.

      $fullMessage    = "Nombre: " . $name . "\r\n";
      $fullMessage   .= "Email: " . $email . "\r\n";
      $fullMessage   .= "Asunto: " . $subject . "\r\n";
      $fullMessage   .= "Mensaje: " . $message . "\r\n";

      //Enviamos el mail

      $sentMail = @mail($email, $subject, $fullMessage, $headers);
       
      //Confirmamos y damos el mensaje al usuario.

      if($sentMail){
       
         header("location:../index.php?estados=A");
         exit;      
       
      }else{
       
         header("location:../index.php?estados=B&nombre=$name&email=$email&asunto=$subject&mensaje=$message");
         exit;
      }
   }

?>