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


class HomeController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Cliente');

    // Enseña la vista principal de la pagina
    public function home()
    {
        $this->set("inicio","");
    }
    
    public function contacto()
    {
        $this->set("contacto","");
        
        if(!empty($this->request->data))
        {
            $data = $this->request->data;
            
            if($data['nombre'] != "" && $data['email'] != "" && $data['mensaje'] != "")
            {
                    App::uses('CakeEmail', 'Network/Email');  

                    $email = new CakeEmail();
                    $email->config('smtp');
                    $email->template('correoContacto', '');
                    $email->emailFormat('html');

                        $email->from('contacto-paginaweb@gomaespumacolor.com','Contacto para GomaEspumaColor');
                        $email->to('info@gomaespumacolor.com');
                        $email->subject('Mensaje de ' . ucwords($data['nombre']));
                        $email->replyTo($data['email']);

                    $email->addHeaders(array('X-Mailer'=>'PHP','Content-Type'=>'multipart/alternative','MIME-Version'=>'1.0'));
                    $email->viewVars(array('nombre'=>ucwords($data['nombre']),'mensaje'=>$data['mensaje']));

                    if($email->send())
                    {
                        $mensajeRetorno =   'Tu mensaje fue enviado, ¡Gracias por contactarnos! <br /><br />' .
                                            'Mientras te escribimos, no olvides darle like a nuestra pagina de Facebook para seguir actualizado: <br /><br />'.
                                            ' <div class="fb-like" data-href="https://www.facebook.com/gomaespumaencolores?fref=ts" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>';

                        $this->Session->setFlash($mensajeRetorno,"success");
                        
                        // Guardo el Cliente
                        $this->__agregarCliente($data);
                    }
                    else
                        $this->Session->setFlash("Mensaje no pudo ser enviado. Intentalo denuevo o envianos un correo directamente a info@gomaespumacolor.com", "error");
            }
            else
            {
                $this->Session->setFlash("Debes rellenar todos los campos del formulario de Contacto.","error");
            }
            
            $this->Session->setFlash("Por favor envianos un correo a info@gomaespumacolor.com , este formulario aun no esta activo.","error");
            $this->redirect(array("controller"=>"home","action"=>"home"));
        }
    }
 
    private function __agregarCliente($data)
    {
        $existe = $this->Cliente->emailExiste($data['email']);
        
        // Si no existe, lo guardo
        if(!$existe)
        {
            $this->Cliente->create();
            $this->request->data['Cliente']['nombre'] = ucwords($data['nombre']);
            $this->request->data['Cliente']['email'] = $data['email'];
            $this->request->data['Cliente']['fecha_contacto'] = date("d-m-Y H:i:s");
            $this->request->data['Cliente']['ip'] = $_SERVER['REMOTE_ADDR'];
            $this->Cliente->save($this->request->data);
        }
    }
    
}
