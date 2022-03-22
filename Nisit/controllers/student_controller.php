<?php
    class StudentController
    {
        public function index()
        {
            require_once("./views/student/index_student.php");
        }

        public function getNisit()
        {
            $ID=$_GET['Student_ID'];       
            $nisit = Student::get($ID);
            require_once("./views/student/index_student.php");
        }
    }

?>