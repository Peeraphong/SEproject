<?php
    class NisitController
    {
        public function index()
        {      
            
            $form = SubmitDoc::getAll();
            require_once("./views/nisit/index_nisit.php");
        }

        public function nisit_detail()
        {   
            $ID = $_GET['form_id'];
            $form = SubmitDoc::getAll();
            require_once("./views/nisit/nisit_detail.php");
        }

    }

?>