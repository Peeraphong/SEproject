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
    
    <?php 
  foreach($form as $form)
  {
    echo '<b>ชื่อ-นามสกุล : </b>';
    echo $form->name_surname;
    echo '<br><br><b>รหัสนิสิต : </b>';
    echo $form->nisit_no;
    echo '<br><br><b>วันที่ยื่นคำร้อง : </b>';
    echo $form->petition;
    echo '<br><br><b>บริษัทที่ไปฝึก : </b>';
    echo $form->company_name;
    echo '<br><br><b>ระยะเวลาการฝึกงาน : </b>';
    echo $form->start_intern;
    echo '<b> ถึง </b>';
    echo $form->end_intern; 
    echo '<br><br><br><br>';

  }
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
