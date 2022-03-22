<?php
class CompanyController
{
    public function index()
    {
        $comList = Company::getAll();
        require_once("./views/company/index_company.php");
    }

    public function add()
    {
        $name=$_GET['name'];
        $address=$_GET['address'];
        $contact=$_GET['contact'];
        $com_no=$_GET['com_no'];

        Company::add($name,$address,$contact,$com_no);
        CompanyController::index();
    }

    public function delete()
    {
        $name=$_GET['name'];
        Company::delete($name);
        CompanyController::index();
        
    }

    public function update()
    {
        $name=$_GET['name'];
        $address=$_GET['address'];
        $contact=$_GET['contact'];
        $com_no=$_GET['com_no'];
        Company::update($name,$address,$contact,$com_no);
        CompanyController::index();
    }
}

?>