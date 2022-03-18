<?php
class CompanyController
{
    public function index()
    {
        $comList = Company::getAll();
        require_once("./views/company/index_company.php");
    }
}


?>