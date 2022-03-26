<?php
class ContactController
{
    public function index()
    {
        require_once("./views/contact/index_contact.php");
    }

    public function add()
    {
        $name=$_GET['name'];
        $email=$_GET['email'];
        $detail=$_GET['detail'];

        Contact::add($name,$email,$detail);

        require_once("./Guest/views/contact/index_contact.php");
    }
}


?>