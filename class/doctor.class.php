<?php
	 /**
	******************************************************
	* @file doctor.class.php
	* @brief Class Doctor
	* @author Eva
	* @version 5.0
	* @date July 2012
	*
	*
	*******************************************************/
	
     class Doctor extends Person{
		 
        protected $_name, $_birthDate, $_departament;
        protected $_patients=array();
 
 		/**
		*************************************************************
		* @brief Constructor
		*************************************************************/
		       
		public function __construct($name, $birthDate, $departament, $patients) {
			parent::__construct($name, $birthDate);		
			$this->_departament = $departament;
			$this->_patients = $patients;	
		}
		public function showPatientsAge() {
			for($i=0; $i<count($this->_patients);$i++) {
				$patientAge=$this->_patients[$i]->age();
				echo "The patient ".$this->_patients[$i]->getName()." ";
				echo "is ".$patientAge." years old. ";
				$diference=$this->age()-$patientAge;
				
				if($diference>0) {
					echo "That's ".$diference ." years younger than the docor.<br />";	
				} else {
					$diference=0-$diference;
					echo "That's ".$diference." years older than the doctor.<br />";	
				}
			}
		}
    }
?>