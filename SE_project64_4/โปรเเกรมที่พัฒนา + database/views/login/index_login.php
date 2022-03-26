<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
    <div class="window">
      <form class="container" name="frmlogin"  method="post" action="?controller=login&action=check" enctype="multipart/form-data">
        <p> </p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/KU_Logo.png" width="100px"/>
        <br><h3> เข้าสู่ระบบ KU </h3>
        <p><b> ชื่อผู้ใช้ &nbsp;&nbsp;:
          <input type="text" required name="Username" placeholder="Username">
        </b></p>
        <p><b>รหัสผ่าน :
          <input type="password" required name="Password" placeholder="Password">
        </b></p>
        <p>
          <button type="submit" name="action" value="Login">Login</button>
          
          <br>
        </p>
      </form>-->
    </div>  
</body>

<style>
@import url('https://fonts.googleapis.com/css2?family=K2D:wght@300&display=swap');


  .container {
    height: 450px;
    width: 400px;
    margin-left: 45em;
    margin-right: auto;
    text-align: center;
    font-size: 20px;
    background-image: linear-gradient(#c5e3ec, white);
    border-style: solid;
    border-width: 1px;
    border-color: grey;
    border-radius: 30px;
    font-family: 'K2D', sans-serif;
  }

  input {
    font-family: 'K2D', sans-serif;
    border-radius: 10px;
    width: 50%;
  }

  h3 {
    font-size: 28px;
    color: #34a0a4;
    text-shadow: #000 0px 0px 1px,   #000 0px 0px 1px,
                 #000 0px 0px 1px,   #000 0px 0px 1px;
  }

  button {
    font-family: 'K2D', sans-serif;
    color: white;
    font-weight: bold;
    padding: 1em;
		background-image: linear-gradient(to right, #168aad, #76c893);
		border: none;
		border-radius: 30px;
		font-weight: 600;
    margin-top: 20px;
  }

  button:hover {
    background-color: #76c893;
  }
  

</style>
</html>
