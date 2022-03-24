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
<div class="title" >
    <b>ข้อความ ปัญหา ข้อเสนอเเนะ</b>
  </div><br><br>
<div class="container">
    
    <table border = 1>
    <tr>
    <th width="150px" height="50px">ชื่อ</th>
    <th width="200px" height="50px">E-mail</th>
    <th width="450px" height="50px">ข้อความ</th>
    </tr>
    
    <?php 
      foreach($contactList as $contactList)
      {
        echo"<tr>
        <td>$contactList->name</td> 
        <td>$contactList->email</td>
        <td>$contactList->detail</td>
        
        </tr>"; 
      }
        echo "</table>";
    ?>

  </div>
  
</body>

<style>
  @import url('https://fonts.googleapis.com/css2?family=K2D:wght@300&display=swap');


.window {
  margin-right: 16em;
  margin-left: 38em;
  
}

.container {
  margin-left: 40em;
  
}

th {
    padding: 8px;
    text-align: center;
    border-style: solid;
    border-width: 2px;
    border-color: #4D77FF;
    background-image: linear-gradient(#4D77FF, #5EE6EB);
    color: white;
    font-size: 18px;
    text-shadow: #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px,
                 #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px,
                 #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px;
    font-family: 'K2D', sans-serif;


}

td {
  padding: 8px;
  text-align: left;
  border-style: solid;
  border-width: 2px;
  background-color: #CAF0F8;
  font-family: 'K2D', sans-serif;
}

td:hover {
  background-color: #90E0EF;
}



.title {
  margin-left: 10em;
  text-align: center;
  font-size: 30px;
  color: #84DFFF;
  text-shadow: #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px,
               #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px,
               #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px,
               #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px;
  font-family: 'K2D', sans-serif;
}

</style>
</html>
