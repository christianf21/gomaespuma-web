<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
    
    <?php 
        echo $this->Html->charset();
    
        
        echo $this->Html->css('bootstrap/css/bootstrap.min');
        echo $this->Html->css('gomaespuma_front');
        echo $this->Html->css('bjqs');
        echo $this->Html->css('alertify.core');
        echo $this->Html->css('alertify.default');
        
        echo $this->Html->script('libs/jquery-2.1.3.min');
        echo $this->Html->script('alertify.min');
        echo $this->Html->script('libs/bootstrap.min');
        echo $this->Html->script('bjqs-1.3.min');
        echo $this->Html->script('jsHome');
        
        
        echo $this->Html->meta('favicon.ico',$this->base.'/favicon.ico',array('type' => 'icon')); 
    ?>
    
    <meta name="description" content="Venta de laminas de Goma Espuma en todos los colores. Envios nacionales e internacionales.">
    <meta name="title" content="Goma Espuma Color, Goma Espuma en Colores y Mas!">
    <meta name="locale" content="es_ES">
    <meta name="site_name" content="Goma Espuma Color">
    <meta name="type" content="website">
    <meta name="keywords" content="Goma Espuma en Colores, Goma Espuma color, goma espuma, goma eva, colores en goma espuma, espuma de color,espucolor,colores espuma,hora loca, fiesta match, fiesta colores goma espuma, birretes, gorro, boda, fiesta de bodas, como hacer goma espuma en colores">
    
    
    <title>Goma Espuma en Colores, Venta de laminas de Goma Espuma en todos los colores, Envios nacionales e internacionales.</title>
</head>
<body>
    <div class="container" id="wrapper">
                <?php echo $this->element("top_menu"); ?>

                <?php echo $this->Session->flash(); ?>
                <div id="content" class="container-fluid">
                    <?php echo $this->fetch('content'); ?>    
                </div>        

                <?php echo $this->element('footer'); ?>
                <?php echo $this->element('sql_dump'); ?>
    </div>
</body>
</html>
