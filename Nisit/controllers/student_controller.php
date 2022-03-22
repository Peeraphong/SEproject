<?php
    class StudentController
    {
        public function index()
        {
            $ID = $_SESSION['Student_ID'];
            //$ID=$_GET['Student_ID'];       
            $nisit = Student::get($ID);
            require_once("./views/student/index_student.php");
        }

    }

?>