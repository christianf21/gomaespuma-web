<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');


class AdminController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Cliente');
        
        public function beforeFilter() 
        {
            parent::beforeFilter();
        
            if(!$this->Session->check('usuarioAdmin'))
            {
                $this->Session->setFlash('área restringida','fallido');
                $this->redirect(array('controller'=>'home','action'=>'home'));
            }
            
            $this->set("admin","");
        }

    // Enseña la vista principal de la pagina
    public function dashboard()
    {
        //this->set("inicio","");
        
        $this->set("clientes",  $this->Cliente->listarClientesAdmin());
    }
    
    
}
