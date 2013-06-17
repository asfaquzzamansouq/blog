<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FeedbackForm
 *
 * @author souq-manayata
 */
class RegisterForm  extends CFormModel{
   
    public $username;
    public $password;
    public $email;
    
    
    public function rules(){
        
        return array(
			// name, email, subject and body are required
			array('name, email, password', 'required'),
			// email has to be a valid email address
			array('email', 'email')
			
		);
    }
    
}

?>
