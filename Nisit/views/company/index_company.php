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
    <form  method="get" action="">
            <input type="text" class="form__input" name="key" placeholder="search">
            <input type="hidden" name="controller" value="company">
            <button type="submit" class="button" name="action" value="search">
            🍳</button> 
    </form>
    <table border = 1>
    <tr>
    <th width="270px" height="50px">ชื่อบริษัท</th>
    <th width="450px" height="50px">ตำเเหน่ง</th>
    <th width="250px" height="50px">ช่องทางติดต่อ</th>
    <th width="100px" height="50px">เบอร์โทรศัพท์</th>
    <th width="100px" height="50px">ค่าตอบเเทน</th>
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



  .form__input {
            color: #333;
            font-size: 15px;
            margin-left: 58em;
  }

  .search-box {
    margin: 30em;
  }

  table {
    
    border-color: black;
  }

  td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    
    background-color: #D3D3D3;
  }

  th {
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #ddd;
    background-color: gray;
    color: white;
  }

  .container {
    margin-left: 29em;
  }

  .title {
    margin-left: 15em;
    text-align: center;
    font-size: 20px;
  }

</style>
</html>
