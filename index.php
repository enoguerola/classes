<?php
	include('class/person.class.php');
	include('class/patient.class.php');
	include('class/departament.class.php');
	include('class/doctor.class.php');
	
	$jan=new Patient('Jan','28/01/1988');
	$jofre=new Patient('Jofre', '17/10/1992');
	
	$dept=new Departament(1, 'Quality');
	$patients=array($jan, $jofre);
	
	$ana=new Doctor('Ana', '07/06/1990', $dept, $patients);
	
	$ana->showPatientsAge();
?>