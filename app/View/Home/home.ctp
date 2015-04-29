<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */


?>

<!-- SLIDER -->
<!--div class="container">
    <div id="slider-gomaespuma">
        <!-- Slides Container -->
        <!--ul class="bjqs">
            <li><img src="<?php echo $this->base."/img/slider/slider1.png" ?>" /></li>
            <li><img src="<?php echo $this->base."/img/slider/slider2.png" ?>" /></li>
            <li><img src="<?php echo $this->base."/img/slider/slider3.png" ?>" /></li>
            <li><img src="<?php echo $this->base."/img/slider/slider4.png" ?>" /></li>
        </ul>
    </div>
</div-->
<!-- FIN DEL SLIDER -->
<br />
    
<div class="container-fluid">
        
        <div class="row">
            <div class="container-fluid">
                    
                    <div class="col-md-8">
                        <h2>¡Bienvenidos a GomaEspumaColor!</h2>
                        <div class="thumbnail">
                            <p>La Goma Espuma se puede usar de muchas maneras; desde decoraciones para fiestas, decoraciones tematicas, hora loca, hasta para teatro, manualidades, disfraces, publicidad…entre otros.</p>
                            <p>Aqui en Goma Espuma Color tenemos una serie de productos que ofrecemos. Vendemos laminas de goma espuma en diferentes tamaños y espesores.</p>
                            <p>¡<a href="#contacto-home">Contáctanos</a> para cualquier pregunta o hacer un pedido!</p>
                        </div>
                    </div>
                <div class="col-md-4">
                    <h2>¿Qué Ofrecemos?</h2>
                    <div class="thumbnail">
                        <p>Brindamos el Servicio mas completo; desde la Venta de las Laminas de Goma Espuma de Colores, hasta Sombreros o Gorros para el evento o Articulos para la Industria o Empresa.</p>
                        <p>¡<a href="#contacto-home">Contáctanos</a> para hacer tu orden!</p>
                    </div>
                </div>
                    
            </div>
                
        </div>
        
        <div class="row">
            <div class="col-md-3">
              <div class="thumbnail">
                  <img src="<?php echo $this->base."/img/thumb2.png" ?>">
                <div class="caption">
                  <h3>Laminas de Goma Espuma</h3>
                  <p>Venta de Laminas de Goma Espuma en todos los Colores. Mas de 20 Colores a escoger…</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                  <img src="<?php echo $this->base."/img/thumb1.png" ?>">
                <div class="caption">
                  <h3>Calidad en Colores</h3>
                  <p>Nuestra goma espuma es procesada de una manera industrial para obtener la mejor calidad en los colores que ofrecemos.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo $this->base."/img/thumb3.png" ?>" >
                  <div class="caption">
                    <h3>Sombreros, Birretes, Hora Loca</h3>
                    <p>Ofrecemos sombreros para tu fiesta, boda, hora loca, stand y mas!</p>
                  </div>
                </div>
            </div>
        
            <div class="col-md-3">
              <div class="thumbnail">
                  <img src="<?php echo $this->base."/img/thumb4.png" ?>">
                <div class="caption">
                  <h3>Goma Espuma Industrial</h3>
                  <p>Para eliminacion de sonido, empaques, acustica, rellenos de muebles y mas!</p>
                </div>
              </div>
            </div>
    </div>
    
        <div class="row">
            <div class="container-fluid" id="mensaje-principal">
                <br >
                <ul class="list-group">
                    <li class="list-group-item">¡Nuestros materiales son de la mejor calidad, tenemos la mayor experiencia en el ramo!</li>
                </ul>
                <br />
            </div>
            <div class="col-md-5">
                <div class="panel panel-info">
                    <div class="panel-heading">
                      <h3 class="panel-title">Carta de Colores</h3>
                    </div>
                    <div class="panel-body">
                        <img src="<?php echo $this->base."/img/paleta.png" ?>" id="paleta-colores" >
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                
                <div class="panel panel-primary" id="contacto-home">
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
                
            </div>
            
            
            
        </div>
    
</div>