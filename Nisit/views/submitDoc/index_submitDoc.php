<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Submit Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./style.css">

</head>
<body>

<h2>ฟอร์มยื่นคำร้องขอฝึกงาน/สหกิจศึกษา</h2><br>

    <div class="title"><b>หมายเหตุ :</b> การฝึกงาน หลักสูตรนี้กำหนดให้นิสิตที่จะฝึกงานได้จะต้องเรียนให้ผ่านในรายวิชา 02204XXX รวมแล้วไม่ต่ำกว่า 35 หน่วยกิต<br> 
      หรือให้อยู่ในดุลพินิจของคณาจารย์ประจำหลักสูตร นิสิตจะฝึกงานกับหน่วยงานที่รับนิสิตเข้าฝึกงาน ไม่ว่าจะเป็นหน่วยงานของรัฐ เอกชน หรือรัฐวิสาหกิจ<br> 
      ทั้งภายในและภายนอกประเทศ ซึ่งนิสิตจะต้องเข้ารับการฝึกงานอย่างน้อย 240 ชั่วโมง และไม่น้อยกว่า 30 วันทำการ เมื่อเสร็จสิ้นการฝึกงาน<br>
      นิสิตจะต้องส่งรายงานฝึกงานและแบบประเมินผลจากหน่วยงานเสนอต่อหน่วยงานฝึกงานภาควิชาวิศวกรรมคอมพิวเตอร์และคณะวิศวกรรมศาสตร์ กำแพงแสน<br><br>
    </div><br>
    <form class="container" method= "get" action="">
      <label>ร้องขอฝึกงาน หรือ สหกิจศึกษา<br><br>
      <input type="radio" required name="intern_coop" value="ฝึกงาน"> ฝึกงาน<br><br>
      <input type="radio" name="intern_coop" value="สหกิจศึกษา"> สหกิจศึกษา<br><br>

      <label for="petition">วันที่เขียนคำร้อง :</label>
      <input type="date" name="petition"><br><br>

      <label for="nisit_no">รหัสนิสิต :</label>
      <input type="text" name="nisit_no"><br><br>

      <label>ชื่อ-นามสกุล :
      <input type= "text" name= "name_surname" /><br><br>

      <label for="telephone_no">เบอร์โทรศัพท์มือถือ :</label>
      <input type="text" name="telephone_no"><br><br>

      <label>ชื่อ Facebook :
      <input type= "text" name= "facebook_name" /><br><br>

      <label>ตำเเหน่งที่ไปฝึกงาน :
      <input type= "text" name= "intern_position" /><br><br>

      <label>ชื่อของผู้ที่จะให้ภาควิชาฯ ออกหนังสือขอความอนุเคราะห์ฝึกงาน/สหกิจ :
      <input type= "text" name= "person1_name" /><br><br>

      <label>ตำแหน่งของผู้ที่จะให้ภาควิชาฯ ออกหนังสือขอความอนุเคราะห์ฝึกงาน/สหกิจ :
      <input type= "text" name= "pos_ps1" /><br><br>

      <br><br><br>
      <label>ชื่อสถานประกอบการ :
      <input type= "text" name= "company_name" /><br><br>
      <label>สถานที่ตั้งเลขที่ :
      <input type= "text" name= "house_number" />
      <label>ถนน :
      <input type= "text" name= "street" /><br><br>
      <label>ตำบล/แขวง :
      <input type= "text" name= "districts" />
      <label>อำเภอ/เขต :
      <input type= "text" name= "amphures" /><br><br>
      <label>จังหวัด :
      <input type= "text" name= "provinces" /><br><br>
      <label>รหัสไปรษณีย์ :
      <input type= "text" name= "postcode" /><br><br>
      
      <br><br><br>
      <label>ชื่อผู้ประสานงาน :
      <input type= "text" name= "HR_name" /><br><br>
      <label>เบอร์โทรศัพท์ :
      <input type= "text" name= "HR_number" /><br><br>
      <label>อีเมล :
      <input type= "text" name= "email" /><br><br>

      <label for="start_intern">ระยะฝึกงานตั้งเเต่วันที่ :</label>
      <input type="date" name="start_intern">&nbsp;
      <label for="end_intern">ถึงวันที่ :</label>
      <input type="date" name="end_intern"><br><br>
      <label>จำนวนค่าตอบแทน (บาท/วัน หรือ บาท/เดือน) (หรือ ไม่มีค่าตอบแทน) :
      <input type= "text" name= "salary" /><br><br>

      <label>ที่พัก<br><br>
      <input type="radio" required name="room" value="มี"> มี<br><br>
      <input type="radio" name="room" value="ไม่มี"> ไม่มี<br><br>

      <!--<label>อัพโหลดใบคำร้องขอฝึกงาน/สหกิจศึกษา</label><br><br>
      <input type="file" name="file_upload" required="required"/>-->

      <p>
        <input type="hidden" name="controller" value="submitDoc" />
        <input type= "submit" name= "action"  value= "add" /></input>
        <input type= "reset" name= "action"  value= "reset" /></input>
      </p>
    </form>

</body>

<style>
.container {
    margin-left: 30em;
    font-size: 20px;
  }

  h2 {
    margin-left: 15em;
    text-align: center;
    font-size: 20px;
  }

  .title {
    margin-left: 25em;
    font-size: 20px;
  }

</style>
</html>
