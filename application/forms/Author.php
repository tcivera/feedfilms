<?php 

class Application_Form_Author extends Zend_Form
{
	public function init()
	{
		
		
		
		$this->setMethod('post');
		$this->setName('login');		
		$this->setDecorators(array(array('ViewScript', array('viewScript' => 'forms/_element_formsignin.phtml'))));
		
        $email = new Zend_Form_Element_Text('email');
		$email->setRequired(true)
				->addValidator('NotEmpty', true)
				->addFilter('StripTags')
				->addFilter('StringTrim')
				->addValidator('StringLength',false,array(3,200))
				->addValidator('emailAddress', true)
				->setAttrib('size', 30)
				->setAttrib('maxlength', 80)
				->setAttrib('placeholder', 'Email address')
				->setAttrib('class', 'form-control')
				->setDecorators(array(array('ViewScript', array('viewScript' => 'forms/_element_text.phtml'))));
		
		$password = new Zend_Form_Element_Password('password');
		$password->setRequired(true)
				->addValidator('NotEmpty', true)
				->addFilter('StripTags')
				->addFilter('StringTrim')
				->addValidator('StringLength',false,array(6,20))
				->setAttrib('size', 30)
<<<<<<< HEAD
				->setAttrib('maxlength', 80)
				->setAttrib('placeholder', 'Password')
				->setAttrib('class', 'form-control')
				->setDecorators(array(array('ViewScript', array('viewScript' => 'forms/_element_text.phtml'))));

		$recaptcha = new Zend_Service_ReCaptcha(
			Zend_Registry::get("recaptcha.public"),
				Zend_Registry::get("recaptcha.private"));
        $captcha = new Zend_Form_Element_Captcha('foo', array(
            'label' => "Please verify you're a human",
            'captcha' => 'ReCaptcha',
            'captchaOptions' => array(
                'captcha' => 'Recaptcha',
                'service' => $recaptcha),
                'ignore' => true
            
        ));
=======
				->setAttrib('maxlength', 80);
		
		
		
		$recaptcha = new Zend_Service_ReCaptcha(
					Zend_Registry::get("recaptcha.public"), 
					Zend_Registry::get("recaptcha.private"));
		
		$captcha = new Zend_Form_Element_Captcha('captcha',
				array(
						'captcha'       => 'ReCaptcha',
						'captchaOptions' => array(
								'captcha' => 'ReCaptcha', 
								'service' => $recaptcha),
						'ignore' => true
				)
		);
		
		
        
>>>>>>> 686826d2719d30075c70bf3215485fbcca435127

        $submit = new Zend_Form_Element_Submit('submit');
		$submit->setAttrib('id', 'submitbutton');
		$submit->setLabel('');
		$submit->setValue('Signin');
		$submit->setAttrib('class', 'btn btn-lg btn-primary btn-block');
		$submit->setDecorators(array(array('ViewScript', array('viewScript' => 'forms/_element_button.phtml'))));
		
		$reset = new Zend_Form_Element_Reset('reset');
		$reset->setDecorators(array(array('ViewScript', array('viewScript' => 'forms/_element_button.phtml'))));
		$reset->setLabel('');
		$reset->setValue('Clear');
		$reset->setAttrib('class', 'btn btn-lg btn-primary btn-block');
		$this->addElements(array(
                                $email,
                                $password,
								$captcha,
<<<<<<< HEAD
                                $submit,
								$reset));
=======
                                $submit
		));
		// And finally add some CSRF protection
		$this->addElement('hash', 'csrf', array(
				'ignore' => true,
		));
>>>>>>> 686826d2719d30075c70bf3215485fbcca435127
	}
}