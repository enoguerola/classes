<?php
	 /**
	******************************************************
	* @file departament.class.php
	* @brief Class Departament
	* @author Eva
	* @version 5.0
	* @date July 2012
	*
	*
	*******************************************************/
	
     class Departament {
        protected $_id, $_name;
		
		public function __construct($id, $name) {
			$this->_id = $id;
			$this->_name = $name;	 
		}
  		public function getId() {
			return $this->_id;
		}
  		public function getName() {
			return $this->_name;
		}
  		public function setId($id) {
			$this->_id=$id;
		}
  		public function setName($name) {
			$this->_name=$name;
		}
		public function __toString(){
			return get_class($this) . " Id Name: ".$this->_id." Departament Name: " . $this->_name;
		}		
	 }
?>