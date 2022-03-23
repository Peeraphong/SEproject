<?php
    class NisitController
    {
        public function index()
        {
            $form = SubmitDoc::getAll();
            require_once("./views/nisit/index_nisit.php");
        }

    }

?>