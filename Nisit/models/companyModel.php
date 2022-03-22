<?php
    class Company{
        //public $id;
        public $name;
        public $address;
        public $contact;
        public $com_no;

        public function __construct($name,$address,$contact,$com_no){
            $this->name = $name;
            $this->address = $address;
            $this->contact = $contact;
            $this->com_no = $com_no;
        }

        public static function getAll(){
            $comList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM company";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $name = $my_row['Company_Name'];
                $address = $my_row['Company_Address'];
                $contact = $my_row['Company_Contact'];
                $com_no = $my_row['Company_No'];

                $comList[]=new Company($name,$address,$contact,$com_no);
            }
            require("connection_close.php");
            return $comList;
        }
    }

?>