<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nisit</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
<link href="https://icons8.com/icon/20FjgTazh8FG/download"></link>
</head>
<body>

<div class="container">
  <h3><b>ข้อมูลนิสิต เเละ ผลการอนุมัติคำร้อง</b></h3>
    <b>ชื่อ-นามสกุล :</b> 
    <?php echo $nisit->Student_Name ?><br><br>
    <b>รหัสนิสิต :</b>
    <?php echo $nisit->Student_ID ?><br><br>
    <?php 
  foreach($form as $form)
  {
    echo '<b>วันที่ยื่นคำร้อง : </b>';
    echo $form->petition;
    echo '<br><br><b>บริษัทที่ไปฝึก : </b>';
    echo $form->company_name;
    echo '<br><br><b>ระยะเวลาการฝึกงาน : </b>';
    echo $form->start_intern;
    echo '<b> ถึง </b>';
    echo $form->end_intern; 
    echo '<br><br><b>ผลการอนุมัติคำร้อง : </b>';
    echo $form->status;
    echo '<br><br><br><br>';

  }
  ?>
</div>
</body>

<style>
  .container {
  height: 370px;
  width: 650px;
  margin-left: 40em;
  margin-right: auto;
  text-align: center;
  font-size: 20px;
  background-image: linear-gradient(#c5e3ec, white);
  border-style: solid;
  border-width: 1px;
  border-color: grey;
  border-radius: 30px;
  font-family: 'K2D', sans-serif;
}

input {
  font-family: 'K2D', sans-serif;
  border-radius: 10px;
  width: 50%;
}

h3 {
  font-size: 28px;
  color: #34a0a4;
  text-shadow: #000 0px 0px 1px,   #000 0px 0px 1px,
               #000 0px 0px 1px,   #000 0px 0px 1px;
}

</style>
</html>
