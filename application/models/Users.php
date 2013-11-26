<?php

class Application_Model_Users
{
	protected $_iduser;
    protected $_password;
    protected $_display_name;
    protected $_state;
    protected $_email;    
    protected $_token;
    protected $_timeout;
    protected $_idusertype;

    public function __construct(array $options = null)
    {
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }

    public function __set($name, $value)
    {
        $method = 'set' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid user property 1');
        }
        $this->$method($value);
    }

    public function __get($name)
    {
        $method = 'get' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid user property 2');
        }
        return $this->$method();
    }

    public function setOptions(array $options)
    {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
        return $this;
    }
	/**
	 * @return the $_iduser
	 */
	public function getIduser() {
		return $this->_iduser;
	}

	/**
	 * @return the $_password
	 */
	public function getPassword() {
		return $this->_password;
	}

	/**
	 * @return the $_display_name
	 */
	public function getDisplay_name() {
		return $this->_display_name;
	}

	/**
	 * @return the $_state
	 */
	public function getState() {
		return $this->_state;
	}

	/**
	 * @return the $_email
	 */
	public function getEmail() {
		return $this->_email;
	}

	/**
	 * @return the $_token
	 */
	public function getToken() {
		return $this->_token;
	}

	/**
	 * @return the $_timeout
	 */
	public function getTimeout() {
		return $this->_timeout;
	}

	/**
	 * @return the $_idusertype
	 */
	public function getIdusertype() {
		return $this->_idusertype;
	}

	/**
	 * @param field_type $_iduser
	 */
	public function setIduser($_iduser) {
		$this->_iduser = $_iduser;
	}

	/**
	 * @param field_type $_password
	 */
	public function setPassword($_password) {
		$this->_password = $_password;
	}

	/**
	 * @param field_type $_display_name
	 */
	public function setDisplay_name($_display_name) {
		$this->_display_name = $_display_name;
	}

	/**
	 * @param field_type $_state
	 */
	public function setState($_state) {
		$this->_state = $_state;
	}

	/**
	 * @param field_type $_email
	 */
	public function setEmail($_email) {
		$this->_email = $_email;
	}

	/**
	 * @param field_type $_token
	 */
	public function setToken($_token) {
		$this->_token = $_token;
	}

	/**
	 * @param field_type $_timeout
	 */
	public function setTimeout($_timeout) {
		$this->_timeout = $_timeout;
	}

	/**
	 * @param field_type $_idusertype
	 */
	public function setIdusertype($_idusertype) {
		$this->_idusertype = $_idusertype;
	}


   
}

