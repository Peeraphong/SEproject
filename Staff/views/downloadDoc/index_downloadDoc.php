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
    <b>ดาวน์โหลดเอกสารเอกสาร</b>
  </div>
<br><br>

<div class="container">
  <table width="1000" height="84" border="1">
    <tr>
    <!--<td width="2000"><div align="center" >เรื่อง</div></td>-->
      <td width="500" height="42"><div align="center"><b>เอกสารที่เกี่ยวข้อง</b></div></td>
      <td width="100" height="42"><div align="center"><b>รายละเอียด</b></div></td>
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
  table {
    text-align: center;
  }

  .container {
    margin-left: 37em;
  }

  .title {
    margin-left: 15em;
    text-align: center;
    font-size: 20px;
  }
</style>
</html>
