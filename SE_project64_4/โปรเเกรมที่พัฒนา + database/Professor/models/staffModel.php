<?php
    class Staff{
        public $Staff_ID;
        public $Staff_Username;
        public $Staff_Password;
        public $Staff_Position;
        public $Staff_Name;

        public function __construct($Staff_ID,$Staff_Username,$Staff_Password,$Staff_Position,$Staff_Name){
            $this->Staff_ID = $Staff_ID;
            $this->Staff_Username = $Staff_Username;
            $this->Staff_Password = $Staff_Password;
            $this->Staff_Position = $Staff_Position;
            $this->Staff_Name = $Staff_Name;
        }

        public static function getAll(){
            $staffList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM staff";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $Staff_ID = $my_row['Staff_ID'];
                $Staff_Username = $my_row['Staff_Username'];
                $Staff_Password = $my_row['Staff_Password'];
                $Staff_Position = $my_row['Staff_Position'];
                $Staff_Name = $my_row['Staff_Name'];

                $staffList[]=new Staff($Staff_ID,$Staff_Username,$Staff_Password,$Staff_Position,$Staff_Name);
            }
            require("connection_close.php");
            return $staffList;
        }

    }
?>