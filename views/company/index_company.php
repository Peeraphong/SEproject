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
  <br><br><br><br><br><br>
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

</body>

<style>
  table {
    font-family: 'Mitr', sans-serif;
    background-color: #f7ede2;
    font-size: 20px;
    text-align: center;
    margin: 25px auto;
    border-collapse: collapse;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1), 0px 10px 20px rgba(0, 0, 0, 0.05), 0px 20px 20px rgba(0, 0, 0, 0.05), 0px 30px 20px rgba(0, 0, 0, 0.05);
  }

  table tr:hover {
    background: #e4ceb4;
  }

  table tr:hover td {
    color: #000;
  }

  table th, table td {
    color: #555;
    padding: 12px 12px;
    border: 1px solid #000;
    border-collapse: collapse;
  }

  table th {
    background: #e4ceb4;
    color: #000;
    text-transform: uppercase;
  }

  table th.last {
    border-right: none;
  }

  body {
    background-color: #FAEBD7;
    color: #eb8c4a;
    font-family: 'Mitr', sans-serif;
    text-align: center;
  }

        
  .form__input {
    color: #333;
    font-size: 15px;
    padding: 10px 10px;
    border-radius: 30px;
    background-color: #fff;
    border: none;
    position: auto;
  }
        
  .button {
    display: inline-block;
    padding: 10px 10px;
    font-size: 15px;
    color: #000;
    background-color: #e4ceb4;
    border: none;
    border-radius: 15px;
    box-shadow: 0 5px #B6A490;
    position: auto; 
            
  }
</style>
</html>
