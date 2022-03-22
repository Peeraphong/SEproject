<?php
    class Contact{
        public $name;
        public $email;
        public $detail;

        public function __construct($name,$email,$detail){
            $this->name = $name;
            $this->email = $email;
            $this->detail = $detail;
        }

        public static function getAll(){
            $contactList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM contact";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $name = $my_row['Contact_Username'];
                $email = $my_row['Contact_Email'];
                $detail = $my_row['Contact_Detail'];

                $contactList[]=new Contact($name,$email,$detail);
            }
            require("connection_close.php");
            return $contactList;
        }

        public static function add($name,$email,$detail){
            require("connection_connect.php");

            $sql = "INSERT INTO `contact` (`Contact_Username`,`Contact_Email`,`Contact_Detail`) VALUES ('$name','$email','$detail')";
            $result = $conn->query($sql);

            require("connection_close.php");

            return("add success $result row");
            
        }
    }

?>