<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Download Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<div class="title" >
    <b>ดาวน์โหลดเอกสาร</b>
  </div>
<br><br>

<div class="container">
  <table width="1000" height="84" border="1">
    <tr>
    <!--<td width="2000"><div align="center" >เรื่อง</div></td>-->
      <th width="500" height="42"><div align="center"><b>เอกสารที่เกี่ยวข้อง</b></div></th>
      <th width="100" height="42"><div align="center"><b>รายละเอียด</b></div></th>
      <!--<td><div align="center">ลบ/แก้ไข</div></td>-->
    </tr>
    <?php 
      foreach($downloadList as $downloadList)
      {
        echo"<tr>
        <td><b>$downloadList->name</b></td> 
        <td><a href=$downloadList->link>ลิงค์ดาวน์โหลด</a></td>
        </tr>"; 

      }
        echo "</table>";
    ?> 
  </table>
  <br><br><br><br><br><br>
  <?php 
  
 ?>

</div>
</body>

<style>
@import url('https://fonts.googleapis.com/css2?family=K2D:wght@300&display=swap');


  table {
    text-align: center;
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

  .container {
    margin-left: 37em;
  }

  .title {
    margin-left: 11em;
    text-align: center;
    font-size: 30px;
    color: #84DFFF;
    text-shadow: #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px,
                 #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px,
                 #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px,
                 #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px;
    font-family: 'K2D', sans-serif;
  }

  a {
    font-weight: bold;
  }


</style>
</html>
