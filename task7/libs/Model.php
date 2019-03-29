<?php 

class Model
{ 
   public function __construct()
   {

   }
   	
	public function getArray()
   {	    
		return array('%TITLE%'=>'Contact Form', '%ERRORS%'=>'Empty field', '%SELECT_NONE%'=>'Please select', '%SELECT_1%'=>'Subject 1', '%SELECT_2%'=>'Subject 2', '%SELECT_3%'=>'Subject 3');	
   }
	
	public function checkForm()
	{
		$name = $_POST['first-last'];
		$email = $_POST['email'];
		$select = $_POST['select'];
		$textarea = $_POST['textarea'];

		return true;			
	}
   
	public function sendEmail()
	{
		// return mail()
	}		
}
