<?php
    class LoginController
    {
        public function index()
        {

            require_once("./views/login/index_login.php");
        }

        public function check()
        {
            $Username=$_POST['Username'];
            $Password=$_POST['Password'];
            $loginList= Account::check($Username,$Password);
            if($loginList->id === ""){
                $_SESSION['username'] = $logintList->username;
                echo "<script>alert('กรอกชื่อผู้ใช้รหัสผ่านไม่ถูกต้อง กรุณากรอกใหม่อีกครั้ง');</script>";
                echo "<script>window.location.href='../SEproject/?controller=login&action=index'</script>";
            }
            else{
                echo "<script>window.location.href='../SEproject/Nisit'</script>";
            }
            
        }
    }

?>