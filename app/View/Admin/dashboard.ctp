<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */


?>


<div class="container-fluid">
    <br />
    <div class="">
        <p>Aqui se muestran los clientes que han escrito por el formulario de contacto:</p>
    </div>
    
    <br />
        
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre cliente</th>
                <th>email</th>
                <th>fecha contacto</th>
                <th>mensaje</th>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach($clientes as $index=>$cliente): ?>
                <tr>
                    <td><?php echo $cliente['Cliente']['id']; ?></td>
                    <td><?php echo $cliente['Cliente']['nombre'] ?></td>
                    <td><?php echo $cliente['Cliente']['email'] ?></td>
                    <td><?php echo date("d-m-Y H:i:s a",strtotime($cliente['Cliente']['fecha_contacto'])) ?></td>
                    <td><?php echo $cliente['Cliente']['mensaje'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        
    </table>
   
    <br />
    
    <a style="margin-bottom: 20px;" href="<?php echo $this->base."/home/salir" ?>" class="btn btn-primary">
        Salir del Admin
    </a>
    
    <br />
</div>