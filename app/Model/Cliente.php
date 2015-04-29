<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author christianfeo
 */
class Cliente extends AppModel{
    
    /*Atributes*/
    public $name= 'Cliente';
    public $useTable='cliente';
    public $primaryKey='id';
   
    public function listarClientesAdmin()
    {
        $parametros = array(
                'recursive'=>-1,
                'order'=>array(
                        'Cliente.id DESC'
                )
        );
        
        return $this->find("all",$parametros);
    }
    
    public function emailExiste($email)
    {
        $flag = false;
        
        $parameters = array(
                'recursive'=>-1,
                'conditions'=>array(
                    'Cliente.email'=>$email
                )
                
        );
        
        $res = $this->find("first",$parameters);
        
        
        if(isset($res['Cliente']['id']))
        {
            $flag = true;
        }
        
        return $flag;
    }
   
}
