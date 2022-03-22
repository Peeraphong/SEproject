<?php
class DownloadDocController
{
    public function index()
    {
        $downloadList = Download::getAll();
        require_once("./views/downloadDoc/index_downloadDoc.php");
    }

    public function add()
    {
        $name=$_GET['name'];
        $link=$_GET['link'];

        DownloadDoc::add($name,$link);
        DownloadDocController::index();
    }

    public function delete()
    {
        $name=$_GET['name'];
        DownloadDoc::delete($name,$link);
        DownloadDocController::index();
    }

    public function update()
    {
        $name=$_GET['name'];
        $link=$_GET['link'];

        DownloadDoc::update($name,$link);
        DownloadDocController::index();
    }
}


?>