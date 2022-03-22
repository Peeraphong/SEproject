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
            $loginList1 = Student::check($Username,$Password);
            $loginList2 = Staff::check($Username,$Password);
            if($loginList1->Student_ID === "" && $loginList2->Staff_Username === ""){
                
                echo "<script>alert('กรอกชื่อผู้ใช้รหัสผ่านไม่ถูกต้อง กรุณากรอกใหม่อีกครั้ง');</script>";
                echo "<script>window.location.href='../SEproject/?controller=login&action=index'</script>";
            }
            else if($loginList2->Staff_Username === "")
            {
                $_SESSION['Student_ID'] = $loginList1->Student_ID;
                $_SESSION['Student_Password'] = $loginList1->Student_Password;
                $_SESSION['Student_Name'] = $loginList1->Student_Name;
                $_SESSION['Student_No'] = $loginList1->Student_No;

                echo "<script>window.location.href='../SEproject/Nisit'</script>";
            }
            else
            {
                if($loginList2->Staff_Position === "Professor")
                {
                    $_SESSION['Staff_ID'] = $loginList2->Staff_ID;
                    $_SESSION['Staff_Username'] = $loginList2->Staff_Username;
                    $_SESSION['Staff_Password'] = $loginList2->Staff_Password;
                    $_SESSION['Staff_Position'] = $loginList2->Staff_Position;
                    $_SESSION['Staff_Name'] = $loginList2->Staff_Name;

                    echo "<script>window.location.href='../SEproject/Professor'</script>"; 
                }
                else if($loginList2->Staff_Position === "Staff")
                {
                    $_SESSION['Staff_ID'] = $loginList2->Staff_ID;
                    $_SESSION['Staff_Username'] = $loginList2->Staff_Username;
                    $_SESSION['Staff_Password'] = $loginList2->Staff_Password;
                    $_SESSION['Staff_Position'] = $loginList2->Staff_Position;
                    $_SESSION['Staff_Name'] = $loginList2->Staff_Name;

                    echo "<script>window.location.href='../SEproject/Staff'</script>"; 
                }
                                  
            }
                
        }
            
    }
    

?>