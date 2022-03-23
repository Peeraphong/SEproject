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
    <b>ข้อมูลนิสิต เเละ ผลการอนุมัติคำร้อง</b>
  </div>
<br><br><br>

<div class="container">
<table width="1000" height="84" border="1">
    <tr>
    <!--<td width="2000"><div align="center" >เรื่อง</div></td>-->
      <td width="2000" height="42"><div align="center">ข่าวประชาสัมพันธ์</div></td>
      <td width="160" height="42"><div align="center">วันที่ติดประกาศ</div></td>
      <td width="150" height="42"><div align="center">รายละเอียด</div></td>
      <!--<td><div align="center">ลบ/แก้ไข</div></td>-->
    </tr>
    <?php 
      foreach($form as $form)
      {
        echo"<tr>
        <td><b>$form->nisit_no </b></td> 
        <td>$form->name_surname</td>
        <td>$form->form_id</td>
        </tr>"; 
      }
        echo "</table>";
    ?>

</div>
</body>

<style>
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
