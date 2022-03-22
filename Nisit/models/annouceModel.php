<?php
    class Annouce{
        public $name;
        public $detail;
        public $date;
        public $link;

        public function __construct($name,$detail,$date,$link){
            $this->name = $name;
            $this->detail = $detail;
            $this->date = $date;
            $this->link = $link;
        }

        public static function getAll(){
            $annouceList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM annouce";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $name = $my_row['Annouce_Name'];
                $detail = $my_row['Annouce_Detail'];
                $date = $my_row['Annouce_Date'];
                $link = $my_row['Annouce_Link'];

                $annouceList[]=new Annouce($name,$detail,$date,$link);
            }
            require("connection_close.php");
            return $annouceList;
        }
    }

?>