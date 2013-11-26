<?php 

class Application_Form_Users extends Zend_Form
{
	public function init()
	{
		$this->setName('users');
		
		$id = new Zend_Form_Element_Hidden('iduser');
		$id->addFilter('Int');
		
		$email = new Zend_Form_Element_Text('email');
		$email->setLabel('Email')
			->setRequired(true)
			->addValidator('NotEmpty', true)
			->addFilter('StripTags')
			->addFilter('StringTrim')
			->addValidator('StringLength',false,array(3,200))
			->addValidator('emailAddress', true)
			->setAttrib('size', 30)
			->setAttrib('maxlength', 80);
		
		$password = new Zend_Form_Element_Password('password');
		$password->setLabel('Password')
		->setRequired(true)
		->addValidator('NotEmpty', true)
		->addFilter('StripTags')
		->addFilter('StringTrim')
		->addValidator('StringLength',false,array(3,20))
		->setAttrib('size', 30)
		->setAttrib('maxlength', 80);		
		
		$role_id = new Zend_Form_Element_Select('idusertype');
		$role_id->setLabel('Role')
		->setRequired(true)
		->addValidator('NotEmpty', true)
		->setmultiOptions(array('1'=>'Cineasta', '2'=>'Productora', '3'=>'Jurado'))
		//->setmultiOptions($this->_selectOptions())
		->setAttrib('maxlength', 200)
		->setAttrib('size', 1);
		
		$submit = new Zend_Form_Element_Submit('submit');
		$submit->setAttrib('id', 'submitbutton');
		
		$this->addElements(array($id, $artist, $title, $submit));
	}
}