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
    <b>สถานประกอบการที่เคยรับนิสิตฝึกงาน</b>
  </div>
<br><br>
  <div class="container">
    
    <table border = 1>
    <tr>
    <th>ชื่อบริษัท</th>
    <th>ตำเเหน่ง</th>
    <th>ช่องทางติดต่อ</th>
    <th>เบอร์โทรศัพท์</th>
    <th>ค่าตอบเเทน</th>
    </tr>
    
    <?php 
      foreach($comList as $comList)
      {
        echo"<tr>
        <td>$comList->name</td> 
        <td>$comList->detail</td>
        <td>$comList->contact</td>
        <td>$comList->com_no</td>
        <td>$comList->salary</td>
        </tr>"; 
      }
        echo "</table>";
    ?>
  </div>

</body>

<style>

  th {
      padding: 8px;
      text-align: center;
      border-bottom: 1px solid #ddd;
      background-color: gray;
      color: white;
  }

  td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    
    background-color: #D3D3D3;
  }
  table {
    height: 500px;
  }

  .container {
    margin-left: 35em;
  }

  .title {
    margin-left: 15em;
    text-align: center;
    font-size: 20px;
  }

</style>
</html>
