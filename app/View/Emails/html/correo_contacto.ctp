<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>


<body style="margin: 0; padding: 0;">
 
    
    <!-- ************** CONTENIDO ***************** -->
                                                                  
        <div style="padding: 0 0 10px 0; border-bottom: dashed 1px; color:#010101;width: 350px;font-weight: bold;">
            <p style="font-family: helvetica;font-weight:bold" >Contacto desde la Web &nbsp;&nbsp;&nbsp;<?php echo date("d-m-Y h:i a") ?></p>
        </div>

        <div style="padding: 0 0 20px 0; border-bottom: dashed 1px; color:#010101;width: 350px;">

        <br />
        <p><b>Nombre: </b> <?php echo $nombre; ?></p>
        <br />
        <b>Mensaje: </b><br /><br />
           <?php echo $mensaje; ?>

        </div>


        <div style="font-family: helvetica; margin: 10px 0 0 0;">
            GomaEspumaColor
            <br />
            <?php echo $this->Html->link('http://www.GomaEspumaColor.com'); ?>
        </div>

        <!-- ****************************************** -->
    
    
</body>


</html>
