<?php
	 /**
	******************************************************
	* @file patient.class.php
	* @brief Class Patient
	* @author Eva
	* @version 5.0
	* @date July 2012
	*
	*
	*******************************************************/
	
	class Patient extends Person{
		protected $_name, $_birthDate;
		
		/**
		*************************************************************
		* @brief Constructor
		*************************************************************/
		
		public function __construct($name, $birthDate) {
			parent::__construct($name, $birthDate);	
		}
	}
?>
