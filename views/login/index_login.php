<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
 
      <form class="container" name="frmlogin"  method="post" action="?controller=login&action=check" enctype="multipart/form-data">
        <p> </p>
        <p><b> Login </b></p>
        <p> ชื่อผู้ใช้ :
          <input type="text" required name="Username" placeholder="Username">
        </p>
        <p>รหัสผ่าน :
          <input type="password" required name="Password" placeholder="Password">
        </p>
        <p>
          <button type="submit" name="action" value="Login">Login</button>
          &nbsp;&nbsp;
          <button type="reset">Reset</button>
          <br>
        </p>
      </form>-->
      
</body>

<style>
  .container {
    margin-left: 10em;
    text-align: center;
    font-size: 20px;
  }

</style>
</html>
