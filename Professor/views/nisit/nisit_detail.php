<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DocDetail</title>
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
    
  <div>
    <?php echo '<b>ชื่อ-นามสกุล : </b>'; 
          echo $form->name_surname; 
          echo '<br><br><b>รหัสนิสิต : </b>';
          echo $form->nisit_no;

          echo '<br><br><b>ยื่นคำร้องในการ : </b>';
          echo $form->intern_coop;
          echo '<br><br><b>วันที่ยื่นคำร้อง : </b>';
          echo $form->petition;
          
          echo '<br><br><b>บริษัทที่ไปฝึก : </b>';
          echo $form->company_name;
          echo '<br><br><b>ระยะเวลาการฝึกงาน : </b>';
          echo $form->start_intern;
          
          echo '<b> ถึง </b>';
          echo $form->end_intern;
          
          echo '<br><br><b>ตำเเหน่งที่ไปฝึกงาน : </b>';
          echo $form->intern_position;


          echo '<br><br><b>ผู้บริหารบริษัท : </b>';
          echo $form->person1_name;
          echo '<br><br><b>ผู้ประสานงาน : </b>';
          echo $form->HR_name;
          echo '<br><br><b>โทรศัพท์ : </b>';
          echo $form->HR_number;
          echo '<br><br><b>E-mail : </b>';
          echo $form->email;


          echo '<br><br><b>สถานะ : </b>';
          echo $form->status;
    ?>
  </div>
  <br>

  <form class="btn" method="get" action="">
    <input type="hidden"name="controller"value="nisit"/>
    <input type="hidden" name="form_id" value="<?php echo $form->form_id; ?>"/>
    <input type="hidden" name="status" value="อนุมัติ"/>
    <button  type= "submit"name="action"value="update">อนุมัติ</button>
  </form> 

  <form class="btn" method="get" action="">  
    <input type="hidden"name="controller"value="nisit"/>
    <input type="hidden" name="form_id" value="<?php echo $form->form_id; ?>"/>
    <input type="hidden" name="status" value="ไม่อนุมัติ"/>
    <button  type= "submit"name="action"value="update">ไม่อนุมัติ</button>
  </form> 

</div>
</body>

<style>
  .btn {
    margin-left: 150px;
  }

  table {
    text-align: center;
  }

  .container {
    margin-left: 55em;
    
  }

  .title {
    margin-left: 15em;
    text-align: center;
    font-size: 20px;
  }

</style>
</html>
