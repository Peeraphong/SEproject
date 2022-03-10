<?php
class PagesController
{
	public function error() 
	{	require_once("views/pages/error.php");	}

	public function index_page()
	{
		require_once("views/pages/index_page.php");
	}

}
?>