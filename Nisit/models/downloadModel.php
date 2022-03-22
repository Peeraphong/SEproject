<?php
    class Download{
        public $name;
        public $link;

        public function __construct($name,$link){
            $this->name = $name;
            $this->link = $link;
        }

        public static function getAll(){
            $downloadList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM download";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $name = $my_row['Download_Name'];
                $link = $my_row['Download_Link'];

                $downloadList[]=new Download($name,$link);
            }
            require("connection_close.php");
            return $downloadList;
        }
    }

?>