<?php
$controllers = array(
	'pages'=>['index', 'error'],
 	'company'=>['index'],
	'submitDoc'=>['index'],
	'downloadDoc'=>['index'],
	'contact'=>['index', 'add']
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
			
			$controller = new submitDocController();
		break;

		case "downloadDoc" :	
			
			$controller = new DownloadDocController();
		break;

		case "contact" :	
			require_once("models/contactModel.php");
			$controller = new ContactController();
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