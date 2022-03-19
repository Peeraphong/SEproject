<?php
class PagesController
{
    public function index()
    {
        $annouceList = Annouce::getAll();
        require_once("./views/pages/index_page.php");
    }
}


?>