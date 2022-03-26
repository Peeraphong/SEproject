<?php
class PagesController
{
    public function index()
    {
        $annouceList = Annouce::getAll();
        require_once("./views/pages/index_page.php");
    }

    public function add()
    {
        $name=$_GET['name'];
        $detail=$_GET['detail'];
        $date=$_GET['date'];
        $link=$_GET['link'];

        Pages::add($name,$detail,$date,$link);
        PagesController::index();
    }

    public function delete()
    {
        $name=$_GET['name'];
        Pages::delete($name);
        PagesController::index();
    }

    public function update()
    {
        $name=$_GET['name'];
        $detail=$_GET['detail'];
        $date=$_GET['date'];
        $link=$_GET['link'];
        pages::update($name,$detail,$date,$link);
        pagesController::index();
    }
}


?>