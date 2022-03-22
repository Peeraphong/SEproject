<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body> 
  
  <h2>Contact Us</h2><br>
    <form class="container" method= "get" action="">
      <label>ชื่อผู้ใช้<br><br>
      <input type= "text" name= "name" />
      </label><br><br>
      <label>E-mail<br><br>
      <input type= "text" name= "email" />
      </label><br><br>
      <p>
        <label>ปัญหาที่เกิดขึ้น<br><br>
        <textarea name= "detail" cols= "45" rows= "5"></textarea>
        </label>
      </p>
      <p>
        <input type="hidden" name="controller" value="contact" />
        <input type= "submit" name= "action"  value= "add" /></input>
        <input type= "reset" name= "action"  value= "reset" /></input>
      </p>
    </form>
  
</body>

<style>
  .container {
    margin-left: 30em;
    
  }

  h2 {
    margin-left: 15em;
    text-align: center;
    font-size: 20px;
  }
</style>
</html>
