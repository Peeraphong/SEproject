<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Company</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>

  <div class="title" >
    สถานประกอบการที่เคยรับนิสิตฝึกงาน
    
  </div>
<br><br>
  <div class="container">
    
    <table border = 1>
    <tr>
    <th>ชื่อบริษัท</th>
    <th>ที่อยู่บริษัท</th>
    <th>ช่องทางติดต่อ</th>
    <th>เบอร์โทรศัพท์</th>
    </tr>
    
    <?php 
      foreach($comList as $comList)
      {
        echo"<tr>
        <td>$comList->name</td> 
        <td>$comList->address</td>
        <td>$comList->contact</td>
        <td>$comList->com_no</td>
        </tr>"; 
      }
        echo "</table>";
    ?>
  </div>

</body>

<style>

  .container {
    margin-left: 30em;
  }

  .title {
    margin-left: 15em;
    text-align: center;
    font-size: 20px;
  }

</style>
</html>
