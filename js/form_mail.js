/* 
* Form-mail
* Description: Validacion de campos del Formulario de Contacto.
* Version: 1.0
* Author: 2021 - Pablo Garay
* https://github.com/PabloGarayOk/Formulario-de-contacto.git
*/

function validar(){
    
    var form_mail = document.form_mail;

    if (form_mail.name.value==0){                   //Comprobamos que no este vacio el campo
        alert("El campo Nombre esta vacio");        //Luego de comprobar mandamos el mensaje
        form_mail.name.value="";                    //Limpieza del campo
        form_mail.name.focus();                     //Hace foco en el campo
        return false;                               //Detenemos la ejecuccion de este script
    }

    if (form_mail.email.value==0){
        alert("El campo Email esta vacio");
        form_mail.email.value="";
        form_mail.email.focus();
        return false;
    }

    if (form_mail.subject.value==0){
        alert("El campo Asunto esta vacio");
        form_mail.subject.value="";
        form_mail.subject.focus();
        return false;
    }

    if (form_mail.message.value==0){
        alert("El campo Mensaje esta vacio");
        form_mail.message.value="";
        form_mail.message.focus();
        return false;
    }
}