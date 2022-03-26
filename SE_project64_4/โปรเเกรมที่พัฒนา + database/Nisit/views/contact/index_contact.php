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
  
  
    <form class="container" method= "get" action="">
      <h2>Contact Us</h2><br>
      
      <label>ชื่อผู้ใช้ :
      <input type= "text" name= "name" />
      </label><br><br>
      <label>E-mail :
      <input type= "text" name= "email" />
      </label><br><br>
      <p>
        <label>ปัญหาที่เกิดขึ้น<br><br>
        <textarea name= "detail" cols= "45" rows= "5"></textarea>
        </label>
      </p>
      <p>
        <input type="hidden" name="controller" value="contact" />
        <button class="bt1" type= "submit" name= "action"  value= "add" >Send</button>
        <button class="bt2" type= "reset" name= "action"  value= "reset" >Cancel</button>
      </p>
    </form>
  
</body>

<style>
@import url('https://fonts.googleapis.com/css2?family=K2D:wght@300&display=swap');

  .container {
    height: 550px;
    width: 600px;
    margin-left: 35em;
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

  button.bt1 {
    width: 100px;
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
  
  button.bt2 {
    width: 100px;
    font-family: 'K2D', sans-serif;
    color: white;
    font-weight: bold;
    padding: 1em;
		background-image: linear-gradient(to right, #FF2400, #FF9900);
		border: none;
		border-radius: 30px;
		font-weight: 600;
    margin-top: 20px;
  }

  h3 {
    font-size: 28px;
    color: #34a0a4;
    text-shadow: #000 0px 0px 1px,   #000 0px 0px 1px,
                 #000 0px 0px 1px,   #000 0px 0px 1px;
  }
</style>
</html>
