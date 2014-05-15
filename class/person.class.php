<?php
	 /**
	******************************************************
	* @file person.class.php
	* @brief Class Person
	* @author Eva
	* @version 5.0
	* @date July 2012
	*
	*
	*******************************************************/
	
	class Person{
		protected $_name, $_birthDate;

		/**
		*************************************************************
		* @brief Constructor
		*************************************************************/
		
		public function __construct($name, $birthDate) {
			$this->_name = $name;
			$this->_birthDate = $birthDate;			
		}
		public function getName(){
			return $this->_name;
		}			
		public function getBirthDate(){
			return $this->_birthDate;
		}		
  		public function setName($name) {
			$this->_name=$name;
		}
  		public function setBirthDate($birthDate) {
			$this->_birthDate=$birdthDate;
		}
		public function age() {
			$var=substr($this->_birthDate, 6, 4);
			$date=date('d/m/Y');
			$date=substr($date, 6, 4);
			return $date-$var;
		}	
	}
?>
