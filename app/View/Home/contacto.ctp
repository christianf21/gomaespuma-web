<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */


?>


<div class="container">
    
    <br />
        
        <div class="panel panel-primary" id="contacto-home" style="max-width: 800px;margin:0 auto;">
            <div class="panel-heading">
              <h3 class="panel-title">¡Contáctanos Hoy!</h3>
            </div>
            <div class="panel-body">
                <div>
                    <p>Hacemos envios nacionales e internacionales. Estamos ubicados en Caracas, Venezuela. Para comunicarse con nosotros porfavor utilizar los siguientes datos:</p>

                    <ul class="list-group" style="width:280px;margin: 0 auto;">
                        <li class="list-group-item"><span class="glyphicon glyphicon-envelope"></span> info@gomaespumacolor.com</li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-phone-alt"></span>  0414 128-0193   /   0212 838-0280</li>
                      </ul>
                    <br />
                    <p>o directamente desde el formulario:</p>
                </div>
                <form action="<?php echo $this->base."/home/contacto" ?>" method="post" id="contactoForm" data-toggle="validator" rol="form">
                    <div class="form-group">
                        <label for="name">Tu Nombre:</label>
                        <input data-minlength="3" name="nombre" type="text" id="nombre-contacto" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electronico:</label>
                        <input name="email" type="email" id="correo-contacto" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje:</label>
                        <textarea type="text" class="form-control" id="mensaje-contacto" rows="4" name="mensaje"></textarea>
                    </div>
                    <button type="submit" id="enviarMensajeContacto" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
   
    <br />
    
</div>