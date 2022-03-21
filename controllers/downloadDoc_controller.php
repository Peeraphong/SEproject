<?php
class DownloadDocController
{
    public function index()
    {
        $downloadList = Download::getAll();
        require_once("./views/downloadDoc/index_downloadDoc.php");
    }
}


?>