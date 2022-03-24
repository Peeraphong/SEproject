<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
<link href="https://icons8.com/icon/20FjgTazh8FG/download"></link>

</head>
<body>

<div class="title" >
    <b>ประกาศ</b>
  </div>
<br><br>
<div class="window"><br><br>
  <div class="container">
    <table width="1000" height="84">
      <tr>
      <!--<td width="2000"><div align="center" >เรื่อง</div></td>-->
        <th width="2000" height="42"><div align="center"><b>ข่าวประชาสัมพันธ์</b></div></th>
        <th width="160" height="42"><div align="center"><b>วันที่ติดประกาศ</b></div></th>
        <th width="150" height="42"><div align="center"><b>รายละเอียด</b></div></th>
        <!--<td><div align="center">ลบ/แก้ไข</div></td>-->
      </tr>
      <?php 
        foreach($annouceList as $annouceList)
        {
          echo"<tr>
          <td><b>$annouceList->name</b> <br><br>&nbsp;$annouceList->detail</td> 
          <td>$annouceList->date</td>
          <td><a href=$annouceList->link>รายละเอียด</a></td>
          </tr>"; 
        }
          echo "</table>";
      ?>
      
      
    </table>
    <br><br><br><br><br><br>

  </div>
</div>
</body>

<style>
@import url('https://fonts.googleapis.com/css2?family=K2D:wght@300&display=swap');


  .window {
    margin-right: 16em;
    margin-left: 38em;
    
  }

  .container {
    margin-left: 1em;
    
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

</style>
</html>
