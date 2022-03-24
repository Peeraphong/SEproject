<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CheckDoc</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
<link href="https://icons8.com/icon/20FjgTazh8FG/download"></link>
</head>
<body>

<div class="title" >
    <b>คำร้องขอฝึกงาน/สหกิจศึกษา</b>
  </div>
<br><br><br>

<div class="container">
<table width="1000" height="84" border="1">
    <tr>
    <!--<td width="2000"><div align="center" >เรื่อง</div></td>-->
      <th width="160" height="42"><div align="center">รหัสนิสิต</div></th>
      <th width="200" height="42"><div align="center">ชื่อ-นามสกุล</div></th>
      <th width="160" height="42"><div align="center">ตำแหน่ง</div></th>
      <th width="80" height="42"><div align="center">รายละเอียด</div></th>
      <!--<td><div align="center">ลบ/แก้ไข</div></td>-->
    </tr>
    <?php 
      foreach($form as $form)
      {
        echo"<tr>
        <td>$form->nisit_no </td> 
        <td>$form->name_surname</td>
        <td>$form->intern_position</td>
        <td><a href=?controller=nisit&action=nisit_detail&form_id=$form->form_id>รายละเอียด</a></td>
        </tr>"; 
      }
        echo "</table>";
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

  .title {
    margin-left: 15em;
    text-align: center;
    font-size: 20px;
  }

</style>
</html>
