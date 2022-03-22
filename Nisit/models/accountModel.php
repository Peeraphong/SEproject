<?php
    class Account{
        public $id;
        public $username;
        public $password;
        public $position;

        public function __construct($id,$username,$password,$position){
            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
            $this->position = $position;
        }

        public static function check($ID,$PASS){

            require("connection_connect.php");

            $sql="SELECT * FROM `account` WHERE (Username LIKE '$ID' AND Password LIKE '$PASS')";
            $result=$conn->query($sql);
            $my_row = $result->fetch_assoc();
            if($my_row===null)
            {
                $id = "";
                $username = "";
                $password = "";
            }
            else
            {
                $id = $my_row['Account_ID'];
                $username = $my_row['Username'];
                $password = $my_row['Password'];
                $position = $my_row['Position'];
            }

            
            require("connection_close.php");
            
            return new Account($id,$username,$password,$position);
        }
    }
?>