<?php
$controllers = array('pages'=>['index_page', 'error']);

function call($controller, $action){
	echo "routes to ".$controller."-".$action."<br>";
	require_once("./controllers/" .$controller."_controller.php"); 
	switch($controller)
	{
		case "pages":	/*require_once("models/atkModel.php");
						require_once("models/companyModel.php");*/
						$controller = new PagesController();
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