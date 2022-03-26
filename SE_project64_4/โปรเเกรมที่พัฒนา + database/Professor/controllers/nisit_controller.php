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
            $form = SubmitDoc::get($ID);
            require_once("./views/nisit/nisit_detail.php");
        }
        public function update()
        {
  
         
            $status=$_GET['status'];
            $oldid=$_GET['form_id'];
            SubmitDoc::update($status,$oldid);
    
            NisitController::index();
        }

        public function search()
        {
            
            $key=$_GET['key'];
            $form = SubmitDoc::search($key);
            require_once("./views/nisit/index_nisit.php");
        }

    }

?>