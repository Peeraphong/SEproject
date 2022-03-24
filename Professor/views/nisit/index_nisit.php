<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Check Document</title>
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
