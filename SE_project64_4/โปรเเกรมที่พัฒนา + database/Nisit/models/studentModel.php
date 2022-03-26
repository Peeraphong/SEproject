<?php
    class Student{
        public $Student_ID;
        public $Student_Username;
        public $Student_Password;
        public $Student_Name;

        public function __construct($Student_ID,$Student_Username,$Student_Password,$Student_Name){
            $this->Student_ID = $Student_ID;
            $this->Student_Username = $Student_Username;
            $this->Student_Password = $Student_Password;
            $this->Student_Name = $Student_Name;
        }

        public static function getAll(){
            $studentList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM student";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $Student_ID = $my_row['Student_ID'];
                $Student_Username = $my_row['Student_Username'];
                $Student_Password = $my_row['Student_Password'];
                $Student_Name = $my_row['Student_Name'];

                $studentList[]=new Student($Student_ID,$Student_Username,$Student_Password,$Student_Name);
            }
            require("connection_close.php");
            return $studentList;
        }

        public static function check($ID,$PASS){

            require("connection_connect.php");

            $sql="SELECT * FROM `student` WHERE (Student_Username LIKE '$ID' AND Student_Password LIKE '$PASS')";
            $result=$conn->query($sql);
            $my_row = $result->fetch_assoc();
            if($my_row===null)
            {
                $Student_ID = "";
                $Student_Username = "";
                $Student_Password = "";
                $Student_Name = "";
            }
            else
            {
                $Student_ID = $my_row['Student_ID'];
                $Student_Username = $my_row['Student_Username'];
                $Student_Password = $my_row['Student_Password'];
                $Student_Name = $my_row['Student_Name'];
            }

            
            require("connection_close.php");
            
            return new Student($Student_ID,$Student_Username,$Student_Password,$Student_Name);
        }

        public static function get($Student_ID){

            require("connection_connect.php");

            $sql = "SELECT * FROM student NATURAL JOIN form_internship WHERE Student_ID = '$Student_ID' ";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();

            $Student_ID = $my_row['Student_ID'];
            $Student_Username = $my_row['Student_Username'];
            $Student_Password = $my_row['Student_Password'];
            $Student_Name = $my_row['Student_Name'];

            require("connection_close.php");

            return new Student($Student_ID,$Student_Username,$Student_Password,$Student_Name);
        }

    }
?>