/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    
    $('#alert_messages').animate({opacity: 1.0}, 25000).fadeOut();
    
    
    $("form#contactoForm").on("submit", function(e){
        
        // validate Nombre, Correo y Mensaje
        var nombre = $("#nombre-contacto").val();
        var correo = $("#correo-contacto").val();
        var msj = $("#mensaje-contacto").val();

        if(nombre === "")
        {
            e.preventDefault();
            alertify.alert("Debes ingresar un nombre.");
        }
        else if(!validateEmail(correo))
        {
            e.preventDefault();
            alertify.alert("Debes ingresar un correo valido.");
        }
        else if(msj === "")
        {
            e.preventDefault();
            alertify.alert("Debes ingresar un mensaje.");
        }
        else
        {
           $("#contactoForm").submit();
        }
        
        
    });
    
    
    
    // Parte del Slider
   $('#slider-gomaespuma').bjqs({
		'height' : 320,
		'width' : 1000,
		'responsive' : true,
                'animtype': 'slide',
                'showcontrols': false,
                'showmarkers': false,
                'automatic': true,
                'animspeed': 2500
    });
    
});
 
    function validateEmail(email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        return re.test(email);
    }
