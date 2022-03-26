<?php
$controllers = array(
	'pages'=>['index', 'error'],
 	'company'=>['index','search'],
	'submitDoc'=>['index', 'add'],
	'downloadDoc'=>['index'],
	'contact'=>['index', 'add'],
	'login'=>['index', 'check'],
	'logout'=>['index'],
	'student'=>['index']
);

function call($controller, $action){
	//echo "routes to ".$controller."-".$action."<br>";
	require_once("./controllers/" .$controller."_controller.php"); 
	switch($controller)
	{
		case "pages":	
			require_once("models/annouceModel.php");
			$controller = new PagesController();
		break;
		

		case "company" :	
			require_once("models/companyModel.php");
			$controller = new CompanyController();
		break;

		case "submitDoc" :	
			require_once("models/submitDocModel.php");
			$controller = new submitDocController();
		break;

		case "downloadDoc" :	
			require_once("models/downloadModel.php");		
			$controller = new DownloadDocController();
		break;

		case "contact" :	
			require_once("models/contactModel.php");
			$controller = new ContactController();
		break;

		case "login" :	
			require_once("models/annouceModel.php");
			require_once("models/accountModel.php");
			$controller = new LoginController();
		break;

		case "logout" :	
			
			$controller = new LogOutController();
		break;

		case "student" :	
			require_once("models/submitDocModel.php");
			require_once("models/staffModel.php");
			require_once("models/studentModel.php");
			$controller = new StudentController();
		break;
						
						
	}

	$controller->{$action}();
}

if(array_key_exists($controller, $controllers)) 
{	if(in_array($action, $controllers [$controller]))
	{	call($controller, $action); }
	else
	{	call('pages', 'error'); }

}
else
{	call('pages', 'error');} 
?>