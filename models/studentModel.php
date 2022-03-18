<?php
    class Student{
        public $Student_ID;
        public $Student_Username;
        public $Student_Password;
        public $Student_Name;
        public $Student_No;

        public function __construct($Student_ID,$Student_Username,$Student_Password,$Student_Name,$Student_No){
            $this->Student_ID = $Student_ID;
            $this->Student_Username = $Student_Username;
            $this->Student_Password = $Student_Password;
            $this->Student_Name = $Student_Name;
            $this->Student_No = $Student_No;
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
                $Student_No = $my_row['Student_No'];

                $studentList[]=new Student($Student_ID,$Student_Username,$Student_Password,$Student_Name,$Student_No);
            }
            require("connection_close.php");
            return $studentList;
        }

    }
?>